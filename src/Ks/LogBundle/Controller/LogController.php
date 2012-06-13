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
		

		$formBuilder = $this->createFormBuilder($utilisateur);
		

		$formBuilder
			->add('Nom',    'text')
			->add('Prenom',    'text')
			->add('Pseudo',   'text')
			->add('Mdp', 'password')
			->add('Mail',  'email');

		$form = $formBuilder->getForm();
		
		$request = $this->get('request');
		
		if( $request->getMethod() == 'POST' )
		{

			$form->bindRequest($request);

			// On v�rifie que les valeurs rentr�es sont correctes.
			// (Nous verrons la validation des objets en d�tail plus bas dans ce chapitre.)
			if( $form->isValid() )
			{
				// On l'enregistre notre objet $article dans la base de donn�es.
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