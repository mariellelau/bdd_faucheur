<?php

namespace FaucheurBundle\Controller;

use FaucheurBundle\Entity\Militants;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Militant controller.
 *
 */
class MilitantsController extends Controller
{
    /**
     * Lists all militant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $militants = $em->getRepository('FaucheurBundle:Militants')->findAll();

        return $this->render('@Faucheur/militants/index.html.twig', array(
            'militants' => $militants,
        ));
    }

    /**
     * Creates a new militant entity.
     *
     */
    public function newAction(Request $request)
    {
        $militant = new Militants();
        $form = $this->createForm('FaucheurBundle\Form\MilitantsType', $militant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($militant);
            $em->flush();

            return $this->redirectToRoute('militants_show', array('idMilitant' => $militant->getIdmilitant()));
        }

        return $this->render('@Faucheur/militants/new.html.twig', array(
            'militant' => $militant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a militant entity.
     *
     */
    public function showAction(Militants $militant)
    {
        $deleteForm = $this->createDeleteForm($militant);

        return $this->render('@Faucheur/militants/show.html.twig', array(
            'militant' => $militant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing militant entity.
     *
     */
    public function editAction(Request $request, Militants $militant)
    {
        $deleteForm = $this->createDeleteForm($militant);
        $editForm = $this->createForm('FaucheurBundle\Form\MilitantsType', $militant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('militants_edit', array('idMilitant' => $militant->getIdmilitant()));
        }

        return $this->render('@Faucheur/militants/edit.html.twig', array(
            'militant' => $militant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a militant entity.
     *
     */
    public function deleteAction(Request $request, Militants $militant)
    {
        $form = $this->createDeleteForm($militant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($militant);
            $em->flush();
        }

        return $this->redirectToRoute('militants_index');
    }

    /**
     * Creates a form to delete a militant entity.
     *
     * @param Militants $militant The militant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Militants $militant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('militants_delete', array('idMilitant' => $militant->getIdmilitant())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
