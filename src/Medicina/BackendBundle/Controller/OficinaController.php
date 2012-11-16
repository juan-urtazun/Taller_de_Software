<?php

namespace Medicina\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Medicina\BackendBundle\Entity\Oficina;
use Medicina\BackendBundle\Form\OficinaType;

/**
 * Oficina controller.
 *
 */
class OficinaController extends Controller {

    /**
     * Lists all Oficina entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BackendBundle:Oficina')->findAll();
        return $this->render('BackendBundle:Oficina:index.html.twig', array(
                    'entities' => $entities
                ));
    }

    /**
     * Finds and displays a Oficina entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendBundle:Oficina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Oficina:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Displays a form to create a new Oficina entity.
     *
     */
    public function newAction() {
        $entity = new Oficina();
        $form = $this->createForm(new OficinaType(), $entity);
                
        return $this->render('BackendBundle:Oficina:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Creates a new Oficina entity.
     *
     */
    public function createAction() {
        $entity = new Oficina();
        $request = $this->getRequest();
        $form = $this->createForm(new OficinaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('backend_oficina', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Oficina:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Displays a form to edit an existing Oficina entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendBundle:Oficina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
        }

        $editForm = $this->createForm(new OficinaType(), $entity);

        return $this->render('BackendBundle:Oficina:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                ));
    }

    /**
     * Edits an existing Oficina entity.
     *
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendBundle:Oficina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
        }

        $editForm = $this->createForm(new OficinaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('backend_oficina', array('id' => $id)));
        }

        return $this->render('BackendBundle:Oficina:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Oficina entity.
     *
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BackendBundle:Oficina')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('backend_oficina'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
