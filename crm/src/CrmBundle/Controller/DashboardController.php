<?php

namespace CrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DashboardController extends Controller
{
    /**
     * @Route("/" , name="index")
     * @Security("has_role('ROLE_USER')")
     */
    public function halloAction()
    {
        return $this->render('CrmBundle:Dashboard:hallo.html.twig', array(
            // ...
        ));
    }

}
