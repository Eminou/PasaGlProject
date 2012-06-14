<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Project;
use Pasa\RequirementBundle\Form\ProjectType;
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

            return $this->redirect($this->generateUrl('project_show', array('id' => $entity->getId())));
            
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

            return $this->redirect($this->generateUrl('project_edit', array('id' => $id)));
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

        return $this->redirect($this->generateUrl('project'));
    }

    private function project_createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}