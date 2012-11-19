<?php

namespace Medicina\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Medicina\KernelBundle\Entity\Tipodecargo;
use Medicina\BackendBundle\Form\TipodecargoType;

/**
 * Tipodecargo controller.
 *
 */
class TipodecargoController extends Controller
{
    /**
     * Lists all Tipodecargo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MedicinaKernelBundle:Tipodecargo')->findAll();

        return $this->render('BackendBundle:Tipodecargo:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Tipodecargo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Tipodecargo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipodecargo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Tipodecargo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Tipodecargo entity.
     *
     */
    public function newAction()
    {
        $entity = new Tipodecargo();
        $form   = $this->createForm(new TipodecargoType(), $entity);

        return $this->render('BackendBundle:Tipodecargo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Tipodecargo entity.
     *
     */
    public function createAction()
    {
        $entity  = new Tipodecargo();
        $request = $this->getRequest();
        $form    = $this->createForm(new TipodecargoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipocargo'));
            
        }

        return $this->render('BackendBundle:Tipodecargo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Tipodecargo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Tipodecargo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipodecargo entity.');
        }

        $editForm = $this->createForm(new TipodecargoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Tipodecargo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tipodecargo entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Tipodecargo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipodecargo entity.');
        }

        $editForm   = $this->createForm(new TipodecargoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipocargo', array('id' => $id)));
        }

        return $this->render('BackendBundle:Tipodecargo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tipodecargo entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MedicinaKernelBundle:Tipodecargo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tipodecargo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipocargo'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
