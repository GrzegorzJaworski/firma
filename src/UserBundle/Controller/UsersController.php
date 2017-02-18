<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;


class UsersController extends Controller
{
    /**
     * @Route("/petsitters_index", name="petsitters_list")
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function petsittersIndexAction()
    {
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM UserBundle:User u WHERE u.roles LIKE :role AND u.enabled like :enable')
            ->setParameter('role', '%"PETSITTER"%')
            ->setParameter('enable', true);

        $petsitters = $query->getResult();

        return $this->render('user/admin/usersList/usersList.html.twig', array(
            'users' => $petsitters,
        ));
    }

    /**
     * Creates a new petsitter entity.
     *
     * @Route("/new_petsitter", name="petsitter_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function newPetsitterAction(Request $request)
    {
        $customer = new User();
        $form = $this->createForm('UserBundle\Form\UserType', $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $roles[] = 'PETSITTER';
            $customer->setRoles($roles)->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush($customer);

            return $this->redirectToRoute('petsitters_list', array());
        }

        return $this->render('user/admin/newPetsitter/new_petsitter.html.twig', array(
            'user' => $customer,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/customers_index", name="customers_list")
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function customersIndexAction()
    {
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM UserBundle:User u WHERE u.roles LIKE :role AND u.enabled like :enable')
            ->setParameter('role', '%"CUSTOMER"%')
            ->setParameter('enable', true);

        $petsitters = $query->getResult();

        return $this->render('user/admin/usersList/usersList.html.twig', array(
            'users' => $petsitters,
        ));
    }

    /**
     * Creates a new customer entity.
     *
     * @Route("/new_customer", name="customer_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function newCustomerAction(Request $request)
    {
        $customer = new User();
        $form = $this->createForm('UserBundle\Form\UserType', $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $roles[] = 'CUSTOMER';
            $customer->setRoles($roles)->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush($customer);
            $session = $request->getSession();
            $session->set('newCustomer', $customer->getId());

            return $this->redirectToRoute('animals_new', array());
        }

        return $this->render('user/admin/newCustomer/new_customer.html.twig', array(
            'user' => $customer,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="users_show")
     * @Method("GET")
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function showAction(User $user)
    {
        return $this->render('user/admin/userShow/show.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="users_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function editAction(Request $request, User $user)
    {
//        $deleteForm = $this->createDeleteForm($animal);
        $editForm = $this->createForm('UserBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('users_edit', array('id' => $user->getId()));
        }

        return $this->render('user/admin/userEdit/edit.html.twig', array(
            'user' => $user,
            'form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/disable", name="users_disable")
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function deactivateAction(User $user)
    {
        $user->setEnabled(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush($user);

        return $this->redirectToRoute('dashboard');
    }



}
