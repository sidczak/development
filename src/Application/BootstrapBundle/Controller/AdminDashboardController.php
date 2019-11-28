<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminDashboardController extends Controller
{

    /**
     * @Route("/", name="_admin-dashboard_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/flot-charts", name="_admin-dashboard_charts-flot")
     * @Template()
     */
    public function chartsFlotAction()
    {
        return array();
    }
    
    /**
     * @Route("/morris-charts", name="_admin-dashboard_charts-morris")
     * @Template()
     */
    public function chartsMorrisAction()
    {
        return array();
    }
    
    /**
     * @Route("/tables", name="_admin-dashboard_tables")
     * @Template()
     */
    public function tablesAction()
    {
        return array();
    }
    
    /**
     * @Route("/forms", name="_admin-dashboard_forms")
     * @Template()
     */
    public function formsAction()
    {
        return array();
    }
    
    /**
     * @Route("/elements", name="_admin-dashboard_elements")
     * @Template()
     */
    public function elementsAction()
    {
        return array();
    }
    
    /**
     * @Route("/grid", name="_admin-dashboard_grid")
     * @Template()
     */
    public function gridAction()
    {
        return array();
    }
    
    /**
     * @Route("/blank-page", name="_admin-dashboard_blank-page")
     * @Template()
     */
    public function blankPageAction()
    {
        return array();
    }
    
}