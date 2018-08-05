<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CarType;
use AppBundle\Entity\Car;
use AppBundle\Entity\Model;
use AppBundle\Entity\Cart;
use AppBundle\Entity\CartCars;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CartController extends Controller
{

    /**
     * @Route("/cart/add", name="cart_add")
     */
    public function addAction(Request $request) {
    
      $manager = $this->getDoctrine()->getManager();
      $session = $this->get('session');
      
      $id_cart = $session->get('id_cart', false);
    
      if(!$id_cart) {
          $cart = new Cart();
          $cart->setUserId(1);
          $cart->setDateCreated(new \DateTime());
          $cart->setDateUpdated(new \DateTime());
          
          $manager->persist($cart);
          $manager->flush();
          
          $session->set('id_cart', $cart->getId()); 
      }
      $cart = $this->getDoctrine()->getRepository('AppBundle:Cart')->find($session->get('id_cart', false));
      $cars = $request->get('cars');
      
      foreach ($cars as $id_car) {
          $carNew = $this->getDoctrine()->getRepository('AppBundle:Car')->find($id_car);
          if ($carNew) {
              $cartCar = $this->getDoctrine()->getRepository('AppBundle:CartCars')->findOneBy([
                  'cart' => $cart,
                  'car' => $carNew 
              ]);
              if (!$cartCar) {
                  $cartCar = new CartCars();
                  $cartCar->setCart($cart);
                  $cartCar->setCar($carNew);
                  $cartCar->setQty(1);
              } else {
                  $cartCar->setQty($cartCar->getQty() + 1);
              }
              
              $manager->persist($cartCar);
          }
      }
      
      $cart->setDateUpdated(new \DateTime());
      $manager->persist($cart);
      $manager->flush();
      
      return $this->redirectToRoute('cart_list');
      
    }
    
    /**
     * @Route("/cart/list", name="cart_list")
     */
    public function listAction() {
        
        $session = $this->get('session');
        $cart = $this->getDoctrine()->getRepository('AppBundle:Cart')->find($session->get('id_cart', false));
        if (!$cart) {
            throw new NotFoundHttpException();
        }
                
        return $this->render('cartList.html.twig', ['cart' => $cart]);
    }

}
