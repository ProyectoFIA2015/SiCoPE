<?php

namespace Acme\SicopeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeSicopeBundle:Default:index.html.twig', array('name' => $name));
    }
}
