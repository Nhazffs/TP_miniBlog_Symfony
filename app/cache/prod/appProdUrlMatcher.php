<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/miniblog')) {
            // EmdsMiniBlogBundle_homepage
            if (rtrim($pathinfo, '/') === '/miniblog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'EmdsMiniBlogBundle_homepage');
                }

                return array (  '_controller' => 'Emds\\MiniBlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'EmdsMiniBlogBundle_homepage',);
            }

            if (0 === strpos($pathinfo, '/miniblog/a')) {
                // EmdsMiniBlogBundle_afficher
                if (0 === strpos($pathinfo, '/miniblog/afficher') && preg_match('#^/miniblog/afficher/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EmdsMiniBlogBundle_afficher')), array (  '_controller' => 'Emds\\MiniBlogBundle\\Controller\\DefaultController::afficherAction',));
                }

                // EmdsMiniBlogBundle_ajouter
                if ($pathinfo === '/miniblog/ajouter') {
                    return array (  '_controller' => 'Emds\\MiniBlogBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'EmdsMiniBlogBundle_ajouter',);
                }

            }

            // EmdsMiniBlogBundle_modifier
            if (0 === strpos($pathinfo, '/miniblog/modifier') && preg_match('#^/miniblog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EmdsMiniBlogBundle_modifier')), array (  '_controller' => 'Emds\\MiniBlogBundle\\Controller\\DefaultController::modifierAction',));
            }

            // EmdsMiniBlogBundle_supprimer
            if (0 === strpos($pathinfo, '/miniblog/supprimer') && preg_match('#^/miniblog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EmdsMiniBlogBundle_supprimer')), array (  '_controller' => 'Emds\\MiniBlogBundle\\Controller\\DefaultController::supprimerAction',));
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
