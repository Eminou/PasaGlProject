<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Project;
use Pasa\RequirementBundle\Form\ProjectType;
use Pasa\RequirementBundle\Entity\Exigency;
use Pasa\RequirementBundle\Form\ExigencyType;
use Pasa\RequirementBundle\Entity\Collaborator;
use Pasa\RequirementBundle\Form\CollaboratorType;
use Pasa\RequirementBundle\Entity\Feature;
use Pasa\RequirementBundle\Form\FeatureType;
use JMS\SecurityExtraBundle\Annotation\Secure;


/**
 * Manager controller.
 *
 * @Route("/managerfront")
 */
class ManagerFrontController extends Controller
{

    /**
     * @Route("/",name="managerfront")
     * @Template()
     */
    public function indexAction()
    {
        return array('null' => null);
    }
    
    /**
     * Lists all Project entities.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project", name="managerfront_project")
     * @Template()
     */
    public function project_indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Project')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Project entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project/{id}/show", name="managerfront_project_show")
     * @Template()
     */
    public function project_showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Project')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Project entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project/new", name="managerfront_project_new")
     * @Template()
     */
    public function project_newAction()
    {
        $entity = new Project();
        $form   = $this->createForm(new ProjectType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Project entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project/create", name="managerfront_project_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Project:new.html.twig")
     */
    public function project_createAction()
    {
        $entity  = new Project();
        $request = $this->getRequest();
        $form    = $this->createForm(new ProjectType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('managerfront_project_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Project entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project/{id}/edit", name="managerfront_project_edit")
     * @Template()
     */
    public function project_editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Project')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project entity.');
        }

        $editForm = $this->createForm(new ProjectType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Project entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project/{id}/update", name="managerfront_project_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Project:edit.html.twig")
     */
    public function project_updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Project')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project entity.');
        }

        $editForm   = $this->createForm(new ProjectType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('managerfront_project_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Project entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/project/{id}/delete", name="managerfront_project_delete")
     * @Method("post")
     */
    public function project_deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PasaRequirementBundle:Project')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Project entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('managerfront_project'));
    }
    
    /**
     * Lists all Project entities.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator", name="managerfront_collaborator")
     * @Template()
     */
    public function collaborator_indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Collaborator')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Collaborator entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator/{id}/show", name="managerfront_collaborator_show")
     * @Template()
     */
    public function collaborator_showAction($id)
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator/new", name="managerfront_collaborator_new")
     * @Template()
     */
    public function collaborator_newAction()
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator/create", name="managerfront_collaborator_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Collaborator:new.html.twig")
     */
    public function collaborator_createAction()
    {
        $entity  = new Collaborator();
        $request = $this->getRequest();
        $form    = $this->createForm(new CollaboratorType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
            $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($password);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('managerfront_collaborator_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Collaborator entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator/{id}/edit", name="managerfront_collaborator_edit")
     * @Template()
     */
    public function collaborator_editAction($id)
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator/{id}/update", name="managerfront_collaborator_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Collaborator:edit.html.twig")
     */
    public function collaborator_updateAction($id)
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

            return $this->redirect($this->generateUrl('managerfront_collaborator_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Collaborator entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/collaborator/{id}/delete", name="managerfront_collaborator_delete")
     * @Method("post")
     */
    public function collaborator_deleteAction($id)
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

        return $this->redirect($this->generateUrl('managerfront_collaborator'));
    }

   /**
     * Lists all Exigency entities.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency", name="managerfront_exigency")
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency/{id}/show", name="managerfront_exigency_show")
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency/new", name="managerfront_exigency_new")
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency/create", name="managerfront_exigency_create")
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

            return $this->redirect($this->generateUrl('managerfront_exigency_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Exigency entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency/{id}/edit", name="managerfront_exigency_edit")
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
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency/{id}/update", name="managerfront_exigency_update")
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

            return $this->redirect($this->generateUrl('managerfront_exigency_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Exigency entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/exigency/{id}/delete", name="managerfront_exigency_delete")
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

        return $this->redirect($this->generateUrl('managerfront_exigency'));
    }
    /**
     * Lists all Feature entities.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature", name="managerfront_feature")
     * @Template()
     */
    public function feature_indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Feature')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Feature entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature/{id}/show", name="managerfront_feature_show")
     * @Template()
     */
    public function feature_showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Feature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Feature entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Feature entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature/new", name="managerfront_feature_new")
     * @Template()
     */
    public function feature_newAction()
    {
        $entity = new Feature();
        $form   = $this->createForm(new FeatureType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Feature entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature/create", name="managerfront_feature_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Feature:new.html.twig")
     */
    public function feature_createAction()
    {
        $entity  = new Feature();
        $request = $this->getRequest();
        $form    = $this->createForm(new FeatureType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('managerfront_feature_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Feature entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature/{id}/edit", name="managerfront_feature_edit")
     * @Template()
     */
    public function feature_editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Feature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Feature entity.');
        }

        $editForm = $this->createForm(new FeatureType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Feature entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature/{id}/update", name="managerfront_feature_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Feature:edit.html.twig")
     */
    public function feature_updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PasaRequirementBundle:Feature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Feature entity.');
        }

        $editForm   = $this->createForm(new FeatureType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('managerfront_feature_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Feature entity.
     * @Secure(roles="ROLE_MANAGER")
     * @Route("/feature/{id}/delete", name="managerfront_feature_delete")
     * @Method("post")
     */
    public function feature_deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PasaRequirementBundle:Feature')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Feature entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('managerfront_feature'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}