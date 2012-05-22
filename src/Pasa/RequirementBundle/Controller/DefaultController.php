<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Secure(roles="ROLE_COLLABORATOR")
     * @Template()
     */

    public function indexAction()
    {
        return array('null' => null);
    }
}
