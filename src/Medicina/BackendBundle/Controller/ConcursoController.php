<?php

namespace Medicina\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Medicina\KernelBundle\Entity\Concurso;
use Medicina\BackendBundle\Form\ConcursoType;

/**
 * Concurso controller.
 *
 */
class ConcursoController extends Controller
{
    /**
     * Lists all Concurso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MedicinaKernelBundle:Concurso')->findAll();

        return $this->render('BackendBundle:Concurso:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Concurso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Concurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concurso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Concurso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Concurso entity.
     *
     */
    public function newAction()
    {
        $entity = new Concurso();
        $form   = $this->createForm(new ConcursoType(), $entity);

        return $this->render('BackendBundle:Concurso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Concurso entity.
     *
     */
    public function createAction()
    {
        $entity  = new Concurso();
        $request = $this->getRequest();
        $form    = $this->createForm(new ConcursoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concurso_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BackendBundle:Concurso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Concurso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Concurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concurso entity.');
        }

        $editForm = $this->createForm(new ConcursoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedicinaKernelBundle:Concurso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Concurso entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedicinaKernelBundle:Concurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concurso entity.');
        }

        $editForm   = $this->createForm(new ConcursoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concurso_edit', array('id' => $id)));
        }

        return $this->render('BackendBundle:Concurso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Concurso entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MedicinaKernelBundle:Concurso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Concurso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('concurso'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
