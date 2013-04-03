<?php

namespace fichatecnica\fichaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use fichatecnica\fichaBundle\Entity\tipotrabajo;
use fichatecnica\fichaBundle\Form\tipotrabajoType;

/**
 * tipotrabajo controller.
 *
 * @Route("/tipotrabajo")
 */
class tipotrabajoController extends Controller
{
    /**
     * Lists all tipotrabajo entities.
     *
     * @Route("/", name="tipotrabajo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('fichaBundle:tipotrabajo')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new tipotrabajo entity.
     *
     * @Route("/", name="tipotrabajo_create")
     * @Method("POST")
     * @Template("fichaBundle:tipotrabajo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new tipotrabajo();
        $form = $this->createForm(new tipotrabajoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipotrabajo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new tipotrabajo entity.
     *
     * @Route("/new", name="tipotrabajo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new tipotrabajo();
        $form   = $this->createForm(new tipotrabajoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a tipotrabajo entity.
     *
     * @Route("/{id}", name="tipotrabajo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:tipotrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipotrabajo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing tipotrabajo entity.
     *
     * @Route("/{id}/edit", name="tipotrabajo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:tipotrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipotrabajo entity.');
        }

        $editForm = $this->createForm(new tipotrabajoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing tipotrabajo entity.
     *
     * @Route("/{id}", name="tipotrabajo_update")
     * @Method("PUT")
     * @Template("fichaBundle:tipotrabajo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:tipotrabajo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipotrabajo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new tipotrabajoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipotrabajo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a tipotrabajo entity.
     *
     * @Route("/{id}", name="tipotrabajo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('fichaBundle:tipotrabajo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tipotrabajo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipotrabajo'));
    }

    /**
     * Creates a form to delete a tipotrabajo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
