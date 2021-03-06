<?php

namespace FoodFlow\EntityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FoodFlow\EntityBundle\Entity\Challenge;
use FoodFlow\EntityBundle\Form\ChallengeType;

/**
 * Challenge controller.
 *
 * @Route("/challenge")
 */
class ChallengeController extends Controller
{
    /**
     * Lists all Challenge entities.
     *
     * @Route("", name="challenge")
     * @Method("GET")
     * @Template("FFWebBundle:Challenge:index.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FFEntityBundle:Challenge')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Challenge entity.
     *
     * @Route("/", name="challenge_create")
     * @Method("POST")
     * @Template("FFEntityBundle:Challenge:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Challenge();
        $form = $this->createForm(new ChallengeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('challenge_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Challenge entity.
     *
     * @Route("/new", name="challenge_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Challenge();
        $form   = $this->createForm(new ChallengeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Challenge entity.
     *
     * @Route("/{id}", name="challenge_show")
     * @Method("GET")
     * @Template("FFWebBundle:Challenge:show.html.twig")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FFEntityBundle:Challenge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Challenge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Challenge entity.
     *
     * @Route("/{id}/edit", name="challenge_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FFEntityBundle:Challenge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Challenge entity.');
        }

        $editForm = $this->createForm(new ChallengeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Challenge entity.
     *
     * @Route("/{id}", name="challenge_update")
     * @Method("PUT")
     * @Template("FFEntityBundle:Challenge:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FFEntityBundle:Challenge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Challenge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ChallengeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('challenge_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Challenge entity.
     *
     * @Route("/{id}", name="challenge_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FFEntityBundle:Challenge')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Challenge entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('challenge'));
    }

    /**
     * Creates a form to delete a Challenge entity by id.
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
