<?php

namespace Taller\Kernel\KernelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TallerKernelKernelBundle:Default:index.html.twig', array('name' => $name));
    }
}
