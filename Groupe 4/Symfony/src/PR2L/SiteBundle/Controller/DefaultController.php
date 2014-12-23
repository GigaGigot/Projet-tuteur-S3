<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('PR2LSiteBundle:Default:accueil.html.twig');
    }
    
    public function actionsEvenementsAction()
    {
        return $this->render('PR2LSiteBundle:Default:actionsEvenements.html.twig');
    }
    
    public function projetAction()
    {
        return $this->render('PR2LSiteBundle:Default:projet.html.twig');
    }
    
    public function fondateursAction()
    {
        return $this->render('PR2LSiteBundle:Default:fondateurs.html.twig');
    }
}
