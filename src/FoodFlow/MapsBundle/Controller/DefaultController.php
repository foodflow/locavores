<?php

namespace FoodFlow\MapsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $map = $this->get('ivory_google_map.map');

        return $this->render('FFMapsBundle:Default:index.html.twig', array('map' => $map));
    }
}
