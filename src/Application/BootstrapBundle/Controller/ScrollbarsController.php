<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ScrollbarsController extends Controller
{

    /**
     * @Route("/nicescroll", name="_scrollbars_nicescroll")
     * @Template()
     */
    public function nicescrollAction()
    {
        return array();
    }
    
    /**
     * @Route("/jscrollpane", name="_scrollbars_jscrollpane")
     * @Template()
     */
    public function jscrollpaneAction()
    {
        return array();
    }

}