<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CarType;
use AppBundle\Entity\Car;
use AppBundle\Entity\Mark;
use AppBundle\Entity\Model;
use AppBundle\Form\MarkType;
use AppBundle\Form\ModelType;
use AppBundle\Form\EngineType;
use AppBundle\Form\ColorType;
use AppBundle\Entity\Color;
use AppBundle\Entity\Engine;

class CarsController extends Controller
{

    const PER_PAGE = 10;

    /**
     * @Route("/cars/add", name="add_cars")
     */
    public function addNewCarActiion(Request $request) {

        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository(Model::class)->fetchModel();

        if ($form->isSubmitted()) {
            $modelId = $_POST['car']['model'];
            $price = (int)$_POST['car']['price'];
            $modelName = $em->getRepository(Model::class)->fetchModelById($modelId);
            $car->setModel($modelId);
            $car->setPrice($price);

            $em->persist($car);
            $em->flush();

            $this->addFlash("addCars", "Добавен е нов автомобил:" . ' Марка: ' . $car->getMark() .
                ', модел: ' . $modelName[0]['name'] . ', двигател: ' . $car->getEngine() . ', цвят: ' . $car->getColor());

            return $this->redirectToRoute('search_cars');
        }
        return $this->render('cars/add-car.html.twig', array('formSearch' => $form->createView(), 'models' => $models));
    }

    /**
     * @Route("/cars/mark/add", name="add_new_mark")
     */
    public function addNewMarkAction(Request $request) {

        $mark = new Mark();
        $markForm = $this->createForm(MarkType::class, $mark);
        $markForm->handleRequest($request);

        if ($markForm->isSubmitted() && $markForm->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($mark);
            $em->flush();

            $this->addFlash("addMark", "Автомобил марка " . $mark->getName() . " е добавен успешно, сега може да добавите и
                 модел към този автомобил");

            return $this->redirectToRoute('add_new_model');
        }

        return $this->render('cars/admin-panel/add/add-new-mark.html.twig', array('markForm' => $markForm->createView()));

    }

    /**
     * @Route("/car/mark/delete/{id}", name="delete_car_mark")
     */
    public function deleteMarkAction(Mark $mark) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($mark);
        $em->flush();

        $this->addFlash("deleteMark", "Кола марка " . $mark->getName() . " е изтрита");

        return $this->redirectToRoute('delete_car_mark');

    }

    /**
     * @Route("/cars/model/add", name="add_new_model")
     */
    public function addNewModelAction(Request $request) {

        $model = new Model();
        $modelForm = $this->createForm(ModelType::class, $model);
        $modelForm->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $marks = $em->getRepository(Mark::class)->fetchMark();

        if ($modelForm->isSubmitted()) {

            $markId = $_POST['model']['mark_id'];
            $model->setMark($markId);
            $em->persist($model);
            $em->flush();

            $this->addFlash("addModel", "Модел: " . $model->getName() . " е добавен успешно!");

            return $this->redirectToRoute('add_new_model');
        }

        return $this->render('cars/admin-panel/add/add-new-model.html.twig', array('modelForm' => $modelForm->createView(), 'marks' => $marks));

    }

    /**
     * @Route("/car/marks", name="view_all_marks")
     */
    public function viewMarksAction() {
        $marks = $this->getDoctrine()->getRepository(Mark::class)->findAll();

        return $this->render('cars/admin-panel/view-marks.html.twig', array('marks' => $marks));
    }

    /**
     * @Route("/car/mark/edit/{id}", name="edit_car_mark")
     */
    public function editCarMarkAction(Request $request, Mark $mark) {

        $form = $this->createForm(MarkType::class, $mark);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mark);
            $em->flush();

            $this->addFlash("editCarsMark", "Марката е редактирана успешно!");

            return $this->redirectToRoute('view_all_marks');
        }
        return $this->render('cars/admin-panel/edit/edit-mark.html.twig', array('markForm' => $form->createView()));

    }

    /**
     * @Route("/car/models", name="view_all_models")
     */
    public function viewModelsAction() {
        $models = $this->getDoctrine()->getRepository(Model::class)->findAll();

        return $this->render('cars/admin-panel/view-models.html.twig', array('models' => $models));
    }

    /**
     * @Route("/car/model/edit/{id}", name="edit_car_model")
     */
    public function editCarModelAction(Request $request, Model $model) {

        $form = $this->createForm(ModelType::class, $model);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($model);
            $em->flush();

            $this->addFlash("editCarsModel", "Моделът е редактиран успешно!");

            return $this->redirectToRoute('view_all_models');
        }
        return $this->render('cars/admin-panel/edit/edit-model.html.twig', array('modelForm' => $form->createView()));

    }

    /**
     * @Route("/cars/color/add", name="add_new_color")
     */
    public function addNewColorAction(Request $request) {

        $color = new Color();
        $colorForm = $this->createForm(ColorType::class, $color);
        $colorForm->handleRequest($request);

        if ($colorForm->isSubmitted() && $colorForm->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($color);
            $em->flush();

            $this->addFlash("addColor", "Добавен е нов цвят: " . $color->getName());

            return $this->redirectToRoute('add_new_color');
        }

        return $this->render('cars/admin-panel/add/add-new-color.html.twig', array('colorForm' => $colorForm->createView()));

    }

    /**
     * @Route("/car/colors", name="view_all_colors")
     */
    public function viewColorsAction() {
        $colors = $this->getDoctrine()->getRepository(Color::class)->findAll();

        return $this->render('cars/admin-panel/view-colors.html.twig', array('colors' => $colors));
    }

    /**
     * @Route("/car/color/edit/{id}", name="edit_car_color")
     */
    public function editCarColorAction(Request $request, Color $color) {

        $form = $this->createForm(ColorType::class, $color);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($color);
            $em->flush();

            $this->addFlash("editCarsColor", "Цвета е редактиран успешно!");

            return $this->redirectToRoute('view_all_colors');
        }
        return $this->render('cars/admin-panel/edit/edit-color.html.twig', array('colorForm' => $form->createView()));

    }

    /**
     * @Route("/cars/engine/add", name="add_new_engine")
     */
    public function addNewEngineAction(Request $request) {

        $engine = new Engine();
        $engineForm = $this->createForm(EngineType::class, $engine);
        $engineForm->handleRequest($request);

        if ($engineForm->isSubmitted() && $engineForm->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($engine);
            $em->flush();

            $this->addFlash("addEngine", "Двигател " . $engine->getName() . " е добавен успешно!");

            return $this->redirectToRoute('add_new_engine');
        }
        return $this->render('cars/admin-panel/add/add-new-engine.html.twig', array('engineForm' => $engineForm->createView()));
    }

    /**
     * @Route("/car/engines", name="view_all_engines")
     */
    public function viewEnginesAction() {
        $engines = $this->getDoctrine()->getRepository(Engine::class)->findAll();

        return $this->render('cars/admin-panel/view-engines.html.twig', array('engines' => $engines));
    }

    /**
     * @Route("/car/engine/edit/{id}", name="edit_car_engine")
     */
    public function editCarEngineAction(Request $request, Engine $engine) {

        $form = $this->createForm(EngineType::class, $engine);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($engine);
            $em->flush();

            $this->addFlash("editCarsEngine", "Цвета е редактиран успешно!");

            return $this->redirectToRoute('view_all_engines');
        }
        return $this->render('cars/admin-panel/edit/edit-engine.html.twig', array('engineForm' => $form->createView()));

    }

    /**
     * @Route("/cars", name="all_cars")
     */
    public function viewAllCarsAction(Request $request) {

        $cars = $this->getDoctrine()->getRepository(Car::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $carCount = $em->getRepository(Car::class)->fetchCarsCount();
        $models = $em->getRepository(Model::class)->fetchModel();

        $cars = $em->getRepository('AppBundle:Car')->fetchCarPaginated($request->get('page', 1), self::PER_PAGE);
        $pages = ceil($carCount / self::PER_PAGE);

        return $this->render('cars/view-cars.html.twig', array('cars' => $cars, 'carCount' => $carCount, 'models' => $models,
            'pages' => $pages
        ));
    }

    /**
     * @Route("/car/edit/{id}", name="edit_car")
     */
    public function editCarAction(Request $request, Car $car) {

        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository(Model::class)->fetchModel();

        if ($form->isSubmitted()) {
            $modelId = $_POST['car']['model'];
            $modelName = $em->getRepository(Model::class)->fetchModelById($modelId);
            $car->setModel($modelId);

            $em->persist($car);
            $em->flush();

            $this->addFlash("editCars", "Редакцията е направена успешно:" . ' Марка: ' . $car->getMark() .
                ', модел: ' . $modelName[0]['name'] . ', двигател: ' . $car->getEngine() . ', цвят: ' . $car->getColor());

            return $this->redirectToRoute('search_cars');
        }
        return $this->render('cars/edit-car.html.twig', array('carForm' => $form->createView(), 'models' => $models));

    }

    /**
     * @Route("/car/delete/{id}", name="delete_car")
     */
    public function deleteCarAction(Car $car) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($car);
        $em->flush();

        $this->addFlash("delete", "Кола марка " . $car->getMark() . " е изтрита");

        return $this->redirectToRoute('all_cars');

    }


}
