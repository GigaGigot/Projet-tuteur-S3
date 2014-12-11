<?php

// src/PR2L/MainBundle/Controller/AdvertController.php

namespace PR2L\MainBundle\Controller;

//Penser a ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
    	$content = $this->get('templating')->render('PR2LMainBundle:Advert:index.html.twig');
    	//le ':' separe les 'dossiers'
        return new Response($content);
    }
}
