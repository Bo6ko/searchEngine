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
use AppBundle\Entity\Tags;
use AppBundle\Form\TagType;

class TagsController extends Controller
{

    /**
     * @Route("/tags/add", name="tags_add")
     */
    public function addAction(Request $request) {
    
        $tags = new Tags();
        $form = $this->createForm(TagType::class, $tags);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tags);
            $em->flush();
            
            return $this->redirectToRoute('view_tags');
        }
        
        return $this->render('tags/add-tags.html.twig', ['form' => $form->createView()]);
    }
    
    /**
     * @Route("/view/tags", name="view_tags")
     */
    public function viewTagsAction() {
        
        $tags = $this->getDoctrine()->getRepository(Tags::class)->findAll();
        
        var_dump($tags);
        
        return $this->render('tags/view-tags.html.twig', ['tags' => $tags[0]]);
    }
    


}
