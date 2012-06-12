<?php

namespace Ks\LogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LogController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('KsLogBundle:Log:index.html.twig');
    }
}