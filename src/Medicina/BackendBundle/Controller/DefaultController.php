<?php

namespace Medicina\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackendBundle:Default:index.html.twig');
    }
    
    public function loginAction()
    {
        return $this->render('BackendBundle:Default:login.html.twig');
    }
}
