<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BusinessController extends Controller
{

    /**
     * @Route("/business-frontpage", name="_business_business-frontpage")
     * @Template()
     */
    public function businessFrontpageAction()
    {
        return array();
    }
    
    /**
     * @Route("/business-modern", name="_business_business-modern")
     * @Template()
     */
    public function businessModernAction()
    {
        return array();
    }
    
    /**
     * @Route("/business-small", name="_business_business-small")
     * @Template()
     */
    public function businessSmallAction()
    {
        return array();
    }

}