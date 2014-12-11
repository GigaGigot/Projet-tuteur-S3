<?php

namespace PR2L\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PR2LMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
