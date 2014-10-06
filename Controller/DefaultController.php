<?php

namespace TH\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('THCoreBundle:Default:index.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('THCoreBundle:Default:contact.html.twig');
    }    
}
