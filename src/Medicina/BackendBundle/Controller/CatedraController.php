<?php

namespace Medicina\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Medicina\KernelBundle\Entity\Catedra;
use Medicina\BackendBundle\Form\CatedraType;

/**
 * Catedra controller.
 *
 */
class CatedraController extends Controller {

    /**
     * Lists all Catedra entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MedicinaKernelBundle:Catedra')->findAll();

        return $this->render('BackendBundle:Catedra:index.html.twig', array(
                    'entities' => $entities));
    }

    /**
     * Finds and displays a Catedra entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Catedra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Catedra:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Displays a form to create a new Catedra entity.
     *
     */
    public function newAction() {
        $entity = new Catedra();
        $form = $this->createForm(new CatedraType(), $entity);

        return $this->render('BackendBundle:Catedra:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Creates a new Catedra entity.
     *
     */
    public function createAction() {
        $entity = new Catedra();
        $request = $this->getRequest();
        $form = $this->createForm(new CatedraType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('backend_oficina', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Catedra:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Displays a form to edit an existing Catedra entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Catedra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
        }

        $editForm = $this->createForm(new CatedraType(), $entity);

        return $this->render('BackendBundle:Catedra:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                ));
    }

    /**
     * Edits an existing Catedra entity.
     *
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Catedra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la oficina solicitada');
        }

        $editForm = $this->createForm(new CatedraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('backend_oficina', array('id' => $id)));
        }

        return $this->render('BackendBundle:Catedra:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Catedra entity.
     *
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MedicinaKernelBundle:Catedra')->find($id);

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

    
    
    private function getDefaultsValuesForTwig() {
       return array('name'=>'Catedra');
        
    }
    }
