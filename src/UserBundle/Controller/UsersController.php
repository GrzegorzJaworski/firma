<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UsersController extends Controller
{
    /**
     * @Route("/index", name="users_list")
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findAll();

        return $this->render('user/admin/usersList/usersList.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * @Route("/deactivate")
     */
    public function deactivateAction()
    {
        return $this->render('UserBundle:Users:deactivate.html.twig', array(
            // ...
        ));
    }

}
