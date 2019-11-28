<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ExceptionController extends Controller
{

    /**
     * @Route("/404", name="_page_404_error")
     * @Template()
     */
    public function page404ErrorAction()
    {
        return array();
    }
    /**
     * @Route("/500", name="_page_500_error")
     * @Template()
     */
    public function page500ErrorAction()
    {
        return array();
    }
    /**
     * @Route("/coming_soon", name="_page_coming_soon")
     * @Template()
     */
    public function pageComingSoonAction()
    {
        return array();
    }
    /**
     * @Route("/under_construction", name="_page_under_construction")
     * @Template()
     */
    public function pageUnderConstructionAction()
    {
        return array();
    }
}