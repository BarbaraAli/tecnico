<?php

namespace fichatecnica\fichaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use fichatecnica\fichaBundle\Entity\ficha;
use fichatecnica\fichaBundle\Form\fichaType;

/**
 * ficha controller.
 *
 * @Route("/ficha")
 */
class fichaController extends Controller
{
    /**
     * Lists all ficha entities.
     *
     * @Route("/", name="ficha")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('fichaBundle:ficha')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new ficha entity.
     *
     * @Route("/", name="ficha_create")
     * @Method("POST")
     * @Template("fichaBundle:ficha:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ficha();
        $form = $this->createForm(new fichaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ficha_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new ficha entity.
     *
     * @Route("/new", name="ficha_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ficha();
        $form   = $this->createForm(new fichaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ficha entity.
     *
     * @Route("/{id}", name="ficha_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:ficha')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ficha entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ficha entity.
     *
     * @Route("/{id}/edit", name="ficha_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:ficha')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ficha entity.');
        }

        $editForm = $this->createForm(new fichaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ficha entity.
     *
     * @Route("/{id}", name="ficha_update")
     * @Method("PUT")
     * @Template("fichaBundle:ficha:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:ficha')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ficha entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new fichaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ficha_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a ficha entity.
     *
     * @Route("/{id}", name="ficha_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('fichaBundle:ficha')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ficha entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ficha'));
    }

    /**
     * Creates a form to delete a ficha entity by id.
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
