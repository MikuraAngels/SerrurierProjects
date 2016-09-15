<?php

namespace SerrurierBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SerrurierBundle\Entity\Serrurier;

/**
 * Serrurier controller.
 *
 */
class SerrurierController extends Controller
{
    /**
     * Lists all Serrurier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $serruriers = $em->getRepository('SerrurierBundle:Serrurier')->findAll();

        return $this->render('serrurier/index.html.twig', array(
            'serruriers' => $serruriers,
        ));
    }

    /**
     * Finds and displays a Serrurier entity.
     *
     */
    public function showAction(Serrurier $serrurier)
    {

        return $this->render('serrurier/show.html.twig', array(
            'serrurier' => $serrurier,
        ));
    }
}
