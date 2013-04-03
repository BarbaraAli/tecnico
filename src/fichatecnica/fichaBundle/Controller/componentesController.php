<?php

namespace fichatecnica\fichaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use fichatecnica\fichaBundle\Entity\componentes;
use fichatecnica\fichaBundle\Form\componentesType;

/**
 * componentes controller.
 *
 * @Route("/componentes")
 */
class componentesController extends Controller
{
    /**
     * Lists all componentes entities.
     *
     * @Route("/", name="componentes")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('fichaBundle:componentes')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new componentes entity.
     *
     * @Route("/", name="componentes_create")
     * @Method("POST")
     * @Template("fichaBundle:componentes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new componentes();
        $form = $this->createForm(new componentesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('componentes_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new componentes entity.
     *
     * @Route("/new", name="componentes_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new componentes();
        $form   = $this->createForm(new componentesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a componentes entity.
     *
     * @Route("/{id}", name="componentes_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:componentes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find componentes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing componentes entity.
     *
     * @Route("/{id}/edit", name="componentes_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:componentes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find componentes entity.');
        }

        $editForm = $this->createForm(new componentesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing componentes entity.
     *
     * @Route("/{id}", name="componentes_update")
     * @Method("PUT")
     * @Template("fichaBundle:componentes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fichaBundle:componentes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find componentes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new componentesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('componentes_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a componentes entity.
     *
     * @Route("/{id}", name="componentes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('fichaBundle:componentes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find componentes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('componentes'));
    }

    /**
     * Creates a form to delete a componentes entity by id.
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
