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
    
    public function partenairesAction()
    {
        return $this->render('PR2LSiteBundle:Default:partenaires.html.twig');
    }
    
    public function gererPartenairesAction()
    {
        return $this->render('PR2LSiteBundle:Default:gererPartenaires.html.twig');
    }
    
    public function ressourcesAction()
    {
        return $this->render('PR2LSiteBundle:Default:ressources.html.twig');
    }
    
    public function archivesAction()
    {
        return $this->render('PR2LSiteBundle:Default:archives.html.twig');
    }
    
    public function bibliothequeAction()
    {
        return $this->render('PR2LSiteBundle:Default:bibliotheque.html.twig');
    }
    
    public function travauxRechercheAction()
    {
        return $this->render('PR2LSiteBundle:Default:travauxRecherche.html.twig');
    }
    
    public function publicationsAction()
    {
        return $this->render('PR2LSiteBundle:Default:publications.html.twig');
    }
    
    public function liensUtilesAction()
    {
        return $this->render('PR2LSiteBundle:Default:liensUtiles.html.twig');
    }
}







































