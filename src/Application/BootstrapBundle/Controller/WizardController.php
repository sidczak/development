<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WizardController extends Controller
{

    /**
     * @Route("/wizard-bcore", name="_wizard_wizard-bcore")
     * @Template()
     */
    public function wizardBcoreAction()
    {
        return array();
    }
    
}