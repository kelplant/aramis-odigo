<?php

namespace OdigoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdigoBundle:Default:index.html.twig');
    }
}
