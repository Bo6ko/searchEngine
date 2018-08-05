<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CarType;
use AppBundle\Entity\Car;
use AppBundle\Entity\Model;

class HomeController extends Controller
{

    const PER_PAGE = 10;

    /**
     * @Route("/", name="search_cars")
     * @param Request $request
     */
    public function viewCarsAfterSearchAction(Request $request) {
        $data = array();

        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $carCount = $em->getRepository(Car::class)->fetchCarsCount();

        $models = $em->getRepository(Model::class)->fetchModel();
        //echo '<pre>' . print_r($models, 1) . '</pre>';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $this->array_map_recursive('trim', $_POST);
            $prices = explode(",", $data['car']['price']);

            $cars = $em->getRepository(Car::class)->fetchAllSearch($data['car']['mark'], $data['car']['model'],
                $data['car']['engine'], $data['car']['color'], (int)$prices[0], (int)$prices[1]);
            $carCount = count($cars);

            $this->addFlash("searchCars", "Резултати от търсенето: ");

            return $this->render('cars/view-search-cars.html.twig', array('cars' => $cars, 'carCount' => $carCount, 'models' => $models
            ));
        }
        return $this->render('cars/search-cars.html.twig', array('formSearch' => $form->createView(), 'carCount' => $carCount, 'models' => $models));
    }


    function array_map_recursive(callable $func, array $array) {
        return filter_var($array, \FILTER_CALLBACK, ['options' => $func]);
    }

}
