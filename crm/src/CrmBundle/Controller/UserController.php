<?php

namespace CrmBundle\Controller;

use CrmBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 * @Security("has_role('ROLE_ADMIN')")
 * @Route("user")
 */
class UserController extends Controller {

    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
                ->getRepository('CrmBundle:User');

        $query = $repository->createQueryBuilder('p')
                    ->where('p.roles LIKE :roles')
                    ->setParameter('roles', '%"' . "ROLE_EMPLOYEE" . '"%')
                    ->getQuery();
        

        $employee = $query->getResult();
       
       $query = $repository->createQueryBuilder('p')
                    ->where('p.roles LIKE :roles')
                    ->setParameter('roles', '%"' . "ROLE_ADMIN" . '"%')
                    ->getQuery();
        

        $admin = $query->getResult();
        
        $query = $repository->createQueryBuilder('p')
                    ->where('p.roles LIKE :roles')
                    ->setParameter('roles', '%"' . "ROLE_CUSTOMER" . '"%')
                    ->getQuery();
        

        $customer = $query->getResult();
//        dump($users);
//        die;
        return $this->render('user/index.html.twig', array(
                    'admin' => $admin, 'employee' => $employee, 'customer' => $customer,
        ));
    }
    

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        
setlocale(LC_TIME, 'polish');
        $user = new User();
        $form = $this->createForm('CrmBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user->setEnabled(true);
            $em->persist($user);
            $em->flush($user);

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user) {
        $deleteForm = $this->createDeleteForm($user);
//        dump($user);
//        die;
        return $this->render('user/show.html.twig', array(
                    'user' => $user,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user) {
        $deleteForm = $this->createDeleteForm($user);
        
        $editForm = $this->createForm('CrmBundle\Form\UserEditType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user) {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush($user);
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
