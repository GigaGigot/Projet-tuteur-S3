<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/pr2l')) {
            if (0 === strpos($pathinfo, '/pr2l/ac')) {
                // pr2_l_site_accueil
                if ($pathinfo === '/pr2l/accueil') {
                    return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'pr2_l_site_accueil',);
                }

                // pr2_l_site_actionsEvenements
                if ($pathinfo === '/pr2l/actionsEvenements') {
                    return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::actionsEvenementsAction',  '_route' => 'pr2_l_site_actionsEvenements',);
                }

            }

            // pr2_l_site_projet
            if ($pathinfo === '/pr2l/projet') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::projetAction',  '_route' => 'pr2_l_site_projet',);
            }

            // pr2_l_site_fondateurs
            if ($pathinfo === '/pr2l/fondateurs') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::fondateursAction',  '_route' => 'pr2_l_site_fondateurs',);
            }

            // pr2_l_site_revuePresse
            if ($pathinfo === '/pr2l/revuePresse') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::revuePresseAction',  '_route' => 'pr2_l_site_revuePresse',);
            }

            // pr2_l_site_adherer
            if ($pathinfo === '/pr2l/adherer') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::adhererAction',  '_route' => 'pr2_l_site_adherer',);
            }

            // pr2_l_site_vieAssociation
            if ($pathinfo === '/pr2l/vieAssociation') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::vieAssociationAction',  '_route' => 'pr2_l_site_vieAssociation',);
            }

            // pr2_l_site_actualites
            if ($pathinfo === '/pr2l/actualites') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::actualitesAction',  '_route' => 'pr2_l_site_actualites',);
            }

            // pr2_l_site_quoiDeNeuf
            if ($pathinfo === '/pr2l/quoiDeNeuf') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::quoiDeNeufAction',  '_route' => 'pr2_l_site_quoiDeNeuf',);
            }

            // pr2_l_site_autourDeNous
            if ($pathinfo === '/pr2l/autourDeNous') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::autourDeNousAction',  '_route' => 'pr2_l_site_autourDeNous',);
            }

            // pr2_l_site_partenaires
            if ($pathinfo === '/pr2l/partenaires') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::partenairesAction',  '_route' => 'pr2_l_site_partenaires',);
            }

            // pr2_l_site_gererPartenaires
            if ($pathinfo === '/pr2l/gererPartenaires') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::gererPartenairesAction',  '_route' => 'pr2_l_site_gererPartenaires',);
            }

            // pr2_l_site_ressources
            if ($pathinfo === '/pr2l/ressources') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::ressourcesAction',  '_route' => 'pr2_l_site_ressources',);
            }

            // pr2_l_site_archives
            if ($pathinfo === '/pr2l/archives') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::archivesAction',  '_route' => 'pr2_l_site_archives',);
            }

            // pr2_l_site_bibliotheque
            if ($pathinfo === '/pr2l/bibliotheque') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::bibliothequeAction',  '_route' => 'pr2_l_site_bibliotheque',);
            }

            // pr2_l_site_travauxRecherche
            if ($pathinfo === '/pr2l/travauxRecherche') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::travauxRechercheAction',  '_route' => 'pr2_l_site_travauxRecherche',);
            }

            // pr2_l_site_publications
            if ($pathinfo === '/pr2l/publications') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::publicationsAction',  '_route' => 'pr2_l_site_publications',);
            }

            // pr2_l_site_liensUtiles
            if ($pathinfo === '/pr2l/liensUtiles') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::liensUtilesAction',  '_route' => 'pr2_l_site_liensUtiles',);
            }

            // pr2_l_site_chantiers
            if ($pathinfo === '/pr2l/chantiers') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::chantiersAction',  '_route' => 'pr2_l_site_chantiers',);
            }

            // pr2_l_site_recensementMutualite
            if ($pathinfo === '/pr2l/recensementMutualite') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::recensementMutualiteAction',  '_route' => 'pr2_l_site_recensementMutualite',);
            }

            // pr2_l_site_intranet
            if ($pathinfo === '/pr2l/intranet') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::intranetAction',  '_route' => 'pr2_l_site_intranet',);
            }

            if (0 === strpos($pathinfo, '/pr2l/c')) {
                // pr2_l_site_connexion
                if ($pathinfo === '/pr2l/connexion') {
                    return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'pr2_l_site_connexion',);
                }

                // pr2_l_site_creation
                if ($pathinfo === '/pr2l/creation') {
                    return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::creationAction',  '_route' => 'pr2_l_site_creation',);
                }

            }

            // pr2_l_site_gestionAdmin
            if ($pathinfo === '/pr2l/gestionAdmin') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::gestionAdminAction',  '_route' => 'pr2_l_site_gestionAdmin',);
            }

            // pr2_l_site_modification
            if ($pathinfo === '/pr2l/modification') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::modificationAction',  '_route' => 'pr2_l_site_modification',);
            }

            // pr2_l_site_deconnexion
            if ($pathinfo === '/pr2l/deconnexion') {
                return array (  '_controller' => 'PR2L\\SiteBundle\\Controller\\DefaultController::deconnexionAction',  '_route' => 'pr2_l_site_deconnexion',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
