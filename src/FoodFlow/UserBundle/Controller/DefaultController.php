<?php

namespace FoodFlow\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FFUserBundle:User')->findByUsername($name);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        return $this->render('FFUserBundle:Default:index.html.twig', array('user' => $entity));
    }
}
