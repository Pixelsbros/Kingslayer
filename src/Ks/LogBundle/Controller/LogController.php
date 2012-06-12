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
		
		// On cr�e le FormBuilder gr�ce � la m�thode du contr�leur.
		$formBuilder = $this->createFormBuilder($utilisateur);
		
		// On ajoute les champs de l'entit� que l'on veut � notre formulaire.
		$formBuilder
			->add('Nom',    'text')
			->add('Prenom',    'text')
			->add('Pseudo',   'text')
			->add('Mdp', 'password')
			->add('Mail',  'email');
		// Pour l'instant, pas de tags, on les g�rera plus tard.

		// � partir du formBuilder, on g�n�re le formulaire.
		$form = $formBuilder->getForm();
		
		// On r�cup�re la requ�te.
		$request = $this->get('request');

		// On v�rifie qu'elle est de type � POST �.
		if( $request->getMethod() == 'POST' )
		{
			// On fait le lien Requ�te <-> Formulaire.
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