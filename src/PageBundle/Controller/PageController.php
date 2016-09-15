<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function showAction($page)
    {
        return $this->render('', array('page' => $page));
    }


    /**
     * Conditions d'Utilisations
     */
    public function cguAction()
    {
        return $this->render('PageBundle:Page:conditions-utilisations.html.twig');
    }

    /**
     * Mentions Légales
     */
    public function mlAction()
    {
        return $this->render('PageBundle:Page:mentions-legales.html.twig');
    }

    /**
     * FAQ
     */
    public function faqAction()
    {
        return $this->render('PageBundle:Page:faq.html.twig');
    }

}
