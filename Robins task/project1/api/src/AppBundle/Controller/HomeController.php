<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use AppBundle\Entity\Color;
use Doctrine\ORM\QueryBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    const PER_PAGE = 10;

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $data = array();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = $this->array_map_recursive('trim', $_POST);

            if(isset($data['btnFirstNameSearch'])) {

                $users = $this->fetch('firstName', $data['user']['first_name']);
                if ($users == NULL) {
                    $this->addFlash("no-result-fname", "Not have result with this name: " . $data['user']['first_name']);
                    return $this->redirectToRoute("homepage");
                }
                return $this->render('users/search_user.html.twig', array('users' => $users));
            }

            if(isset($data['btnLastNameSearch'])) {
                $users = $this->fetch('lastName', $data['user']['last_name']);
                if ($users == NULL) {
                    $this->addFlash("no-result-lname", "Not have result with this name: " . $data['user']['last_name']);
                    return $this->redirectToRoute("homepage");
                }
                return $this->render('users/search_user.html.twig', array('users' => $users));
            }

            if(isset($data['btnColorSearch'])) {
                $users = $this->fetch('color', $data['user']['color']);

                return $this->render('users/search_user.html.twig', array('users' => $users));
            }


            $searchAll = trim($_POST['searchAll']);
            if(isset($data['btnSearchAll'])) {
                $users = $this->fetchAll($searchAll);
                if ($users == NULL) {
                    $this->addFlash("no-result-lname", "Not have result with this name: " . $data['user']['last_name']);
                    return $this->redirectToRoute("homepage");
                }
                return $this->render('users/search_user.html.twig', array('users' => $users));
            }


        }

        $manager = $this->getDoctrine()->getManager();
        $repo = $manager->getRepository('AppBundle:User');

        $userCount = $repo->fetchProductCount();
        $users = $repo->fetchUserPaginated($request->get('page', 1), self::PER_PAGE);
        $pages = ceil($userCount / self::PER_PAGE);

        return $this->render('default/index.html.twig', array('users' => $users,
            'userCount' => $userCount, 'pages' => $pages, 'data' => $data
        ));

    }


    function array_map_recursive(callable $func, array $array) {
        return filter_var($array, \FILTER_CALLBACK, ['options' => $func]);
    }

    public function fetch($column, $name) {

        $qb = $this->getDoctrine()->getManager()->getRepository(User::class)->createQueryBuilder('u');
        $qb->select('u')
        ->where($qb->expr()->like('u.'.$column, $qb->expr()->literal('%'.$name.'%')));

        return $qb->getQuery()->getResult();

    }

    public function fetchAll($name) {

        $qb = $this->getDoctrine()->getManager()->getRepository(User::class)->createQueryBuilder('u');
        $qb->select('u')
        ->where($qb->expr()->like('u.firstName', $qb->expr()->literal('%'.$name.'%')))
        ->orWhere($qb->expr()->like('u.lastName', $qb->expr()->literal('%'.$name.'%')))
        ->orWhere($qb->expr()->like('u.color', $qb->expr()->literal('%'.$name.'%')));

        return $qb->getQuery()->getResult();

    }

}
