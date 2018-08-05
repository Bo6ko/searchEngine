<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use AppBundle\Entity\Color;

class UserController extends Controller
{

    /**
     * @Route("/user/add", name="add_user")
     * @Method("GET")
     */
    public function addUserAction()
    {
        $form = $this->createForm(UserType::class);
        return $this->render('users/add_user.html.twig', array('userForm' => $form->createView()));
    }

    /**
     * @Route("/user/add", name="add_user_process")
     * @Method("POST")
     */
    public function addUserProcessAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash("add", "User with name " . $user->getFirstName() . " " . $user->getLastName() . " is added!");

            return $this->redirectToRoute("homepage");

        }

        return $this->render('users/add_user.html.twig', array('userForm' => $form->createView()));
    }

    /**
     * @Route("/user/edit/{id}", name="edit_user")
     * @Method("GET")
     */
    public function edintUserAction(User $user) {

        $form = $this->createForm(UserType::class, $user);

        return $this->render('users/edit_user.html.twig', array('userForm' => $form->createView()));
    }

    /**
     * @Route("/user/edit/{id}", name="edit_user_process")
     * @Method("POST")
     */
    public function edintUserProcessAction(User $user, Request $request) {

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash("edit", "User with name " . $user->getFirstName() . " " . $user->getLastName() . "was edited sucessfully");

            return $this->redirectToRoute('homepage');
        }

        return $this->render('users/edit_user.html.twig', array('userForm' => $form->createView()));
    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/user/delete/{id}", name="delete_user")
     */
    public function deleteUserAction(User $user) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash("delete", "User " . $user->getFirstName() . " " . $user->getLastName() . " is deleted");

        return $this->redirectToRoute('homepage');

    }

}
