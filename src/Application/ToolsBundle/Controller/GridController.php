<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GridController extends Controller
{

    /**
     * @Route("/fluid12", name="_grid_fluid12")
     * @Template()
     */
    public function fluid12Action()
    {
        return array();
    }
    /**
     * @Route("/fluid16", name="_grid_fluid16")
     * @Template()
     */
    public function fluid16Action()
    {
        return array();
    }
    /**
     * @Route("/fixed12", name="_grid_fixed12")
     * @Template()
     */
    public function fixed12Action()
    {
        return array();
    }
    /**
     * @Route("/fixed16", name="_grid_fixed16")
     * @Template()
     */
    public function fixed16Action()
    {
        return array();
    }  
    /**
     * @Route("/responsive", name="_grid_responsive")
     * @Template()
     */
    public function responsiveAction()
    {
        return array();
    }
    /**
     * @Route("/fluid16_responsive", name="_grid_fluid16_responsive")
     * @Template()
     */
    public function fluid16ResponsiveAction()
    {
        return array();
    }
    /**
     * @Route("/responsive_views", name="_grid_responsive_views")
     * @Template()
     */
    public function responsiveViewsAction()
    {
        return array();
    }
    
    
}
