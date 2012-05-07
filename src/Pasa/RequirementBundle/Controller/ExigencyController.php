<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pasa\RequirementBundle\Entity\Exigency;
use Pasa\RequirementBundle\Form\ExigencyType;

/**
 * Exigency controller.
 *
 * @Route("/exigency")
 */
class ExigencyController extends Controller
{
    /**
     * Lists all Exigency entities.
     *
     * @Route("/", name="exigency")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PasaRequirementBundle:Exigency')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Exigency entity.
     *
     * @Route("/{id}/show", name="exigency_show")
     * @Template()
     */
    public function showAction($id)
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
     *
     * @Route("/new", name="exigency_new")
     * @Template()
     */
    public function newAction()
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
     *
     * @Route("/create", name="exigency_create")
     * @Method("post")
     * @Template("PasaRequirementBundle:Exigency:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Exigency();
        $request = $this->getRequest();
        $form    = $this->createForm(new ExigencyType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('exigency_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Exigency entity.
     *
     * @Route("/{id}/edit", name="exigency_edit")
     * @Template()
     */
    public function editAction($id)
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
     *
     * @Route("/{id}/update", name="exigency_update")
     * @Method("post")
     * @Template("PasaRequirementBundle:Exigency:edit.html.twig")
     */
    public function updateAction($id)
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

            return $this->redirect($this->generateUrl('exigency_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Exigency entity.
     *
     * @Route("/{id}/delete", name="exigency_delete")
     * @Method("post")
     */
    public function deleteAction($id)
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

        return $this->redirect($this->generateUrl('exigency'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
