<?php

namespace Ks\LogBundle\Controller;
use Ks\LogBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LogController extends Controller
{
    
    public function indexAction()
    {
		$utilisateur = new Utilisateur();
		$utilisateur->setIp('127.0.0.1');
		$utilisateur->setDate(new \Datetime());
		
		// On crée le FormBuilder grâce à la méthode du contrôleur.
		$formBuilder = $this->createFormBuilder($utilisateur);
		
		// On ajoute les champs de l'entité que l'on veut à notre formulaire.
		$formBuilder
			->add('Nom',    'text')
			->add('Prenom',    'text')
			->add('Pseudo',   'text')
			->add('Mdp', 'password')
			->add('Mail',  'email');
		// Pour l'instant, pas de tags, on les gérera plus tard.

		// À partir du formBuilder, on génère le formulaire.
		$form = $formBuilder->getForm();
		
		// On récupère la requête.
		$request = $this->get('request');

		// On vérifie qu'elle est de type « POST ».
		if( $request->getMethod() == 'POST' )
		{
			// On fait le lien Requête <-> Formulaire.
			$form->bindRequest($request);

			// On vérifie que les valeurs rentrées sont correctes.
			// (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
			if( $form->isValid() )
			{
				// On l'enregistre notre objet $article dans la base de données.
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($utilisateur);
				$em->flush();

				// On redirige vers la page d'accueil, par exemple.
				return $this->redirect($this->generateUrl('KsLogBundle_homepage'));
			}
		}
        return $this->render('KsLogBundle:Log:index.html.twig', array(
        'form' => $form->createView(),
		));
    }
}