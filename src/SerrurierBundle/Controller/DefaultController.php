<?php

namespace SerrurierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SerrurierBundle:Default:index.html.twig');
    }
}
