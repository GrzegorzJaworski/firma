<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     * @Security("has_role('ROLE_SUPER_ADMIN') or has_role('PETSITTER')")
     */
    public function indexAction()
    {
        if( $this->getUser()->getRoles()[0] == 'ROLE_SUPER_ADMIN' ) {
            return $this->render(':user/admin:index.html.twig');
        } elseif ( $this->getUser()->getRoles()[0] == 'PETSITTER' ) {
            return $this->render(':user/petsitter:index.html.twig');
        }

    }
}
