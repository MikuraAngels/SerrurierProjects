<?php

namespace SerrurierBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SerrurierBundle\Entity\Serrurier;
use SerrurierBundle\Form\SerrurierType;

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
     * Creates a new Serrurier entity.
     *
     */
    public function newAction(Request $request)
    {
        $serrurier = new Serrurier();
        $form = $this->createForm('SerrurierBundle\Form\SerrurierType', $serrurier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serrurier);
            $em->flush();

            return $this->redirectToRoute('serrurier_show', array('id' => $serrurier->getId()));
        }

        return $this->render('serrurier/new.html.twig', array(
            'serrurier' => $serrurier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Serrurier entity.
     *
     */
    public function showAction(Serrurier $serrurier)
    {
        $deleteForm = $this->createDeleteForm($serrurier);

        return $this->render('serrurier/show.html.twig', array(
            'serrurier' => $serrurier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Serrurier entity.
     *
     */
    public function editAction(Request $request, Serrurier $serrurier)
    {
        $deleteForm = $this->createDeleteForm($serrurier);
        $editForm = $this->createForm('SerrurierBundle\Form\SerrurierType', $serrurier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serrurier);
            $em->flush();

            return $this->redirectToRoute('serrurier_edit', array('id' => $serrurier->getId()));
        }

        return $this->render('serrurier/edit.html.twig', array(
            'serrurier' => $serrurier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Serrurier entity.
     *
     */
    public function deleteAction(Request $request, Serrurier $serrurier)
    {
        $form = $this->createDeleteForm($serrurier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serrurier);
            $em->flush();
        }

        return $this->redirectToRoute('serrurier_index');
    }

    /**
     * Creates a form to delete a Serrurier entity.
     *
     * @param Serrurier $serrurier The Serrurier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Serrurier $serrurier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('serrurier_delete', array('id' => $serrurier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
