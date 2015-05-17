<?php

namespace Emds\MiniBlogBundle\Controller;

use Emds\MiniBlogBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    
class DefaultController extends Controller
{
    
    public function indexAction()
    {
        // récupération des messages de la base de données
        $messages = $this->getDoctrine()
                         ->getEntityManager()
                         ->getRepository('EmdsMiniBlogBundle:Message')
                         ->findAll();
        return $this->render('EmdsMiniBlogBundle:Default:index.html.twig', 
        array('messages' => $messages));
    }
    public function afficherAction($id)
    {
        $message = $this->getDoctrine()
                        ->getEntityManager()
                        ->getRepository('EmdsMiniBlogBundle:Message')
                        ->find($id);
        return $this->render('EmdsMiniBlogBundle:Default:afficher.html.twig', 
        array('message' => $message));
                
    }
    private function gestionFormulaire($message, $twig) {
        // création du constructeur de formulaire
        $formBuilder = $this->createFormBuilder($message);
        // ajout des champs pour la construction du formulaire
        $formBuilder ->add('date', 'date')
                     ->add('titre', 'text')
                     ->add('contenu', 'textarea')
                     ->add('auteur', 'text');
        // génération du formulaire
        $form = $formBuilder->getForm() ;
        // récupération de la requête
        $request = $this->getRequest() ;
        // contrôle de la méthode d'appel de la page
        if ($request->getMethod() == "POST") {
            // hydratation de l'objet
            $form->handleRequest($request) ;
            // contrôle de la validité du formulaire
            if ($form->isValid()) {
                // création de l'entityManager
                $em = $this->getDoctrine()->getEntityManager() ;
                // enregistrement des données
                $em->persist($message) ;
                $em->flush() ;
                // redirection vers la liste des messages
                return $this->redirect( $this->generateUrl('EmdsMiniBlogBundle_homepage') );
            }
        }
        // envoi du formulaire au template pour l'afficher
        return $this->render('EmdsMiniBlogBundle:Default:'.$twig.'.html.twig',
        array('form' => $form->createView()));
    }
    public function ajouterAction() {
        // création de l'objet qui va être lié au formulaire
        $message = new Message();
        // gestion complète du formulaire et de son retour
        return $this->gestionFormulaire($message, 'ajouter');
    }
    public function modifierAction($id) {
        // récupération de l'entité correspondant à cet id
        $message = $this->getDoctrine()
                        ->getEntityManager()
                        ->getRepository('EmdsMiniBlogBundle:Message')
                        ->find($id);
        // gestion complète du formulaire et de son retour
        return $this->gestionFormulaire($message, 'modifier');
    }
    public function supprimerAction($id)
    {
        // création de l'entityManager
    $em = $this->getDoctrine()->getEntityManager() ;
    // récupération des messages de la base de données
    $message = $em->getRepository('EmdsMiniBlogBundle:Message')->find($id);
    // suppression du message
    $em->remove($message);
    $em->flush();
    // redirection vers la liste des messages
    return $this->redirect( $this->generateUrl('EmdsMiniBlogBundle_homepage'));
    //return $this->render('EmdsMiniBlogBundle:Default:supprimer.html.twig', array('id' => $id)) ;
    }
}
