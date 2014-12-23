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
    
    public function revuePresseAction()
    {
        return $this->render('PR2LSiteBundle:Default:revuePresse.html.twig');
    }
    
    public function adhererAction()
    {
        return $this->render('PR2LSiteBundle:Default:adherer.html.twig');
    }
    
    public function vieAssociationAction()
    {
        return $this->render('PR2LSiteBundle:Default:vieAssociation.html.twig');
    }
    
    public function actualitesAction()
    {
        return $this->render('PR2LSiteBundle:Default:actualites.html.twig');
    }
    
    public function quoiDeNeufAction()
    {
        return $this->render('PR2LSiteBundle:Default:quoiDeNeuf.html.twig');
    }
    
    public function autourDeNousAction()
    {
        return $this->render('PR2LSiteBundle:Default:autourDeNous.html.twig');
    }
}
