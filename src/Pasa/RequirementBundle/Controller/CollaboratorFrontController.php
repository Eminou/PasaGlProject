<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Exigency;
use Pasa\RequirementBundle\Form\ExigencyType;
use Pasa\RequirementBundle\Entity\Progression;
use Pasa\RequirementBundle\Form\ProgressionType;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * Collaborator controller.
 *
 * @Route("/collaboratorfront")
 */
class CollaboratorFrontController extends Controller
{

    /**
     * @Route("/",name="collaboratorfront")
     * @Template()
     */
    public function indexAction()
    {
        return array('null' => null);
    }
    
   /**
     * Lists all Exigency entities.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency", name="collaboratorfront_exigency")
     * @Template()
     */
    public function exigency_indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Exigency')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Exigency entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency/{id}/show", name="collaboratorfront_exigency_show")
     * @Template()
     */
    public function exigency_showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Exigency')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Exigency entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Exigency entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency/new", name="collaboratorfront_exigency_new")
     * @Template()
     */
    public function exigency_newAction()
    {
        $entity = new Exigency();
        $form   = $this->createForm(new ExigencyType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Exigency entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency/create", name="collaboratorfront_exigency_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Exigency:new.html.twig")
     */
    public function exigency_createAction()
    {
        $entity  = new Exigency();
        $request = $this->getRequest();
        $form    = $this->createForm(new ExigencyType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('collaboratorfront_exigency_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Exigency entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency/{id}/edit", name="collaboratorfront_exigency_edit")
     * @Template()
     */
    public function exigency_editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Exigency')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Exigency entity.');
        }

        $editForm = $this->createForm(new ExigencyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Exigency entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency/{id}/update", name="collaboratorfront_exigency_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Exigency:edit.html.twig")
     */
    public function exigency_updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Exigency')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Exigency entity.');
        }

        $editForm   = $this->createForm(new ExigencyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('collaboratorfront_exigency_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Exigency entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/exigency/{id}/delete", name="collaboratorfront_exigency_delete")
     * @Method("post")
     */
    public function exigency_deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PasaRequirementBundle:Exigency')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Exigency entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('collaboratorfront_exigency'));
    }
    /**
     * Lists all Progression entities.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression", name="collaboratorfront_progression")
     * @Template()
     */
    public function progression_indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Progression')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Progression entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression/{id}/show", name="collaboratorfront_progression_show")
     * @Template()
     */
    public function progression_showAction($id)
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
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression/new", name="collaboratorfront_progression_new")
     * @Template()
     */
    public function progression_newAction()
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
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression/create", name="collaboratorfront_progression_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Progression:new.html.twig")
     */
    public function progression_createAction()
    {
        $entity  = new Progression();
        $request = $this->getRequest();
        $form    = $this->createForm(new ProgressionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('collaboratorfront_progression_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Progression entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression/{id}/edit", name="collaboratorfront_progression_edit")
     * @Template()
     */
    public function progression_editAction($id)
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
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression/{id}/update", name="collaboratorfront_progression_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Progression:edit.html.twig")
     */
    public function collaborator_updateAction($id)
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

            return $this->redirect($this->generateUrl('collaboratorfront_progression_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Progression entity.
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Route("/progression/{id}/delete", name="collaboratorfront_progression_delete")
     * @Method("post")
     */
    public function collaborator_deleteAction($id)
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

        return $this->redirect($this->generateUrl('collaboratorfront_progression'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}