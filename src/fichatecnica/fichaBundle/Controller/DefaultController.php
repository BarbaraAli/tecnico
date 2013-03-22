<?php

namespace fichatecnica\fichaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('fichaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function verdatosAction(){

        $em = $this->getDoctrine()->getEntityManager();
//        $em->persist($producto);
//        $em->flush();
        $fichatecnica = $em->getRepository('fichaBundle:ficha')->findAll();
        return $this->render('fichaBundle:Default:verdatos.html.twig',
                array('ficha' => $fichatecnica));
    }
}
