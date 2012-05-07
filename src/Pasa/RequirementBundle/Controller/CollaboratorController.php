<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Collaborator;
use Pasa\RequirementBundle\Form\CollaboratorType;

/**
 * Collaborator controller.
 *
 * @Route("/collaborator")
 */
class CollaboratorController extends Controller
{
    /**
     * Lists all Collaborator entities.
     *
     * @Route("/", name="collaborator")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Collaborator')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Collaborator entity.
     *
     * @Route("/{id}/show", name="collaborator_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Collaborator')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Collaborator entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Collaborator entity.
     *
     * @Route("/new", name="collaborator_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Collaborator();
        $form   = $this->createForm(new CollaboratorType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Collaborator entity.
     *
     * @Route("/create", name="collaborator_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Collaborator:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Collaborator();
        $request = $this->getRequest();
        $form    = $this->createForm(new CollaboratorType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('collaborator_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Collaborator entity.
     *
     * @Route("/{id}/edit", name="collaborator_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Collaborator')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Collaborator entity.');
        }

        $editForm = $this->createForm(new CollaboratorType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Collaborator entity.
     *
     * @Route("/{id}/update", name="collaborator_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Collaborator:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Collaborator')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Collaborator entity.');
        }

        $editForm   = $this->createForm(new CollaboratorType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('collaborator_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Collaborator entity.
     *
     * @Route("/{id}/delete", name="collaborator_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PasaRequirementBundle:Collaborator')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Collaborator entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('collaborator'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
