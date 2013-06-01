<?php

namespace FoodFlow\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FFWebBundle:Challenge:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('FFWebBundle:Default:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('FFWebBundle:Default:contact.html.twig');
    }

    public function purposeAction()
    {
        return $this->render('FFWebBundle:Default:purpose.html.twig');
    }
}
