<?php

namespace Ks\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('KsNewsBundle:Default:index.html.twig', array('name' => $name));
    }
}
