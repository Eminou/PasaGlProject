<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Manager;
use Pasa\RequirementBundle\Form\ManagerType;

/**
 * Manager controller.
 *
 * @Route("/manager")
 */
class ManagerController extends Controller
{
    /**
     * Lists all Manager entities.
     *
     * @Route("/", name="manager")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Manager')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Manager entity.
     *
     * @Route("/{id}/show", name="manager_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Manager')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manager entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Manager entity.
     *
     * @Route("/new", name="manager_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Manager();
        $form   = $this->createForm(new ManagerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Manager entity.
     *
     * @Route("/create", name="manager_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Manager:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Manager();
        $request = $this->getRequest();
        $form    = $this->createForm(new ManagerType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('manager_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Manager entity.
     *
     * @Route("/{id}/edit", name="manager_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Manager')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manager entity.');
        }

        $editForm = $this->createForm(new ManagerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Manager entity.
     *
     * @Route("/{id}/update", name="manager_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Manager:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Manager')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manager entity.');
        }

        $editForm   = $this->createForm(new ManagerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('manager_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Manager entity.
     *
     * @Route("/{id}/delete", name="manager_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PasaRequirementBundle:Manager')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Manager entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('manager'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
