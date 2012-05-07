<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Progression;
use Pasa\RequirementBundle\Form\ProgressionType;

/**
 * Progression controller.
 *
 * @Route("/progression")
 */
class ProgressionController extends Controller
{
    /**
     * Lists all Progression entities.
     *
     * @Route("/", name="progression")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Progression')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Progression entity.
     *
     * @Route("/{id}/show", name="progression_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Progression')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Progression entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Progression entity.
     *
     * @Route("/new", name="progression_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Progression();
        $form   = $this->createForm(new ProgressionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Progression entity.
     *
     * @Route("/create", name="progression_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Progression:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Progression();
        $request = $this->getRequest();
        $form    = $this->createForm(new ProgressionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('progression_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Progression entity.
     *
     * @Route("/{id}/edit", name="progression_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Progression')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Progression entity.');
        }

        $editForm = $this->createForm(new ProgressionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Progression entity.
     *
     * @Route("/{id}/update", name="progression_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Progression:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Progression')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Progression entity.');
        }

        $editForm   = $this->createForm(new ProgressionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('progression_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Progression entity.
     *
     * @Route("/{id}/delete", name="progression_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PasaRequirementBundle:Progression')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Progression entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('progression'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
