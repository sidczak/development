<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FontController extends Controller
{

    /**
     * @Route("/fontBootstrap", name="_font_fontBootstrap")
     * @Template()
     */
    public function fontBootstrapAction()
    {
        return array();
    }
    
    /**
     * @Route("/fontAwesome", name="_font_fontAwesome")
     * @Template()
     */
    public function fontAwesomeAction()
    {
        return array();
    }
    
    /**
     * @Route("/flaticon", name="_font_flaticon")
     * @Template()
     */
    public function flaticonAction()
    {
        return array();
    }
    
}