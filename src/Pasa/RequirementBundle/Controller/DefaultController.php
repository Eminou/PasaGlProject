<?php

namespace Pasa\RequirementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Default controller.
 * @Route("/default")
 */
class DefaultController extends Controller {

    /**
     * @Route("/", name="default")
     * @Template()
     */
    public function indexAction() {
        return array('null' => null);
    }

}
