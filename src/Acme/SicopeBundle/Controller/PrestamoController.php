<?php

namespace Acme\SicopeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\SicopeBundle\Entity\Prestamo;
use Acme\SicopeBundle\Form\PrestamoType;

/**
 * Prestamo controller.
 *
 */
class PrestamoController extends Controller
{

    /**
     * Lists all Prestamo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeSicopeBundle:Prestamo')->findAll();

        return $this->render('AcmeSicopeBundle:Prestamo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Prestamo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Prestamo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prestamo_show', array('id' => $entity->getIdprestamo())));
        }

        return $this->render('AcmeSicopeBundle:Prestamo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Prestamo entity.
     *
     * @param Prestamo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Prestamo $entity)
    {
        $form = $this->createForm(new PrestamoType(), $entity, array(
            'action' => $this->generateUrl('prestamo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Prestamo entity.
     *
     */
    public function newAction()
    {
        $entity = new Prestamo();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcmeSicopeBundle:Prestamo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Prestamo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeSicopeBundle:Prestamo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestamo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeSicopeBundle:Prestamo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Prestamo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeSicopeBundle:Prestamo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestamo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeSicopeBundle:Prestamo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Prestamo entity.
    *
    * @param Prestamo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Prestamo $entity)
    {
        $form = $this->createForm(new PrestamoType(), $entity, array(
            'action' => $this->generateUrl('prestamo_update', array('id' => $entity->getIdprestamo())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Prestamo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeSicopeBundle:Prestamo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestamo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('prestamo_edit', array('id' => $id)));
        }

        return $this->render('AcmeSicopeBundle:Prestamo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Prestamo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeSicopeBundle:Prestamo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Prestamo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('prestamo'));
    }

    /**
     * Creates a form to delete a Prestamo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prestamo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
