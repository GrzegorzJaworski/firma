<?php

namespace AnimalsBundle\Controller;

use AnimalsBundle\Entity\Animals;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Animal controller.
 *
 * @Route("animals")
 */
class AnimalsController extends Controller
{
    /**
     * Lists all animal entities.
     *
     * @Route("/", name="animals_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $animals = $em->getRepository('AnimalsBundle:Animals')->findAll();

        return $this->render('animals/index.html.twig', array(
            'animals' => $animals,
        ));
    }

    /**
     * Creates a new animal entity.
     *
     * @Route("/new", name="animals_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $animal = new Animals();
        $form = $this->createForm('AnimalsBundle\Form\AnimalsType', $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush($animal);

            return $this->redirectToRoute('animals_show', array('id' => $animal->getId()));
        }

        return $this->render('animals/new.html.twig', array(
            'animal' => $animal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a animal entity.
     *
     * @Route("/{id}", name="animals_show")
     * @Method("GET")
     */
    public function showAction(Animals $animal)
    {
        $deleteForm = $this->createDeleteForm($animal);

        return $this->render('animals/show.html.twig', array(
            'animal' => $animal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing animal entity.
     *
     * @Route("/{id}/edit", name="animals_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Animals $animal)
    {
        $deleteForm = $this->createDeleteForm($animal);
        $editForm = $this->createForm('AnimalsBundle\Form\AnimalsType', $animal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('animals_edit', array('id' => $animal->getId()));
        }

        return $this->render('animals/edit.html.twig', array(
            'animal' => $animal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a animal entity.
     *
     * @Route("/{id}", name="animals_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Animals $animal)
    {
        $form = $this->createDeleteForm($animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($animal);
            $em->flush($animal);
        }

        return $this->redirectToRoute('animals_index');
    }

    /**
     * Creates a form to delete a animal entity.
     *
     * @param Animals $animal The animal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Animals $animal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('animals_delete', array('id' => $animal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
