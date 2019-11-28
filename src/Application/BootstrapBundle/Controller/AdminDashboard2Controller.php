<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminDashboard2Controller extends Controller
{

    /**
     * @Route("/", name="_admin-dashboard2_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/flot-charts", name="_admin-dashboard2_charts-flot")
     * @Template()
     */
    public function chartsFlotAction()
    {
        return array();
    }
    
    /**
     * @Route("/morris-charts", name="_admin-dashboard2_charts-morris")
     * @Template()
     */
    public function chartsMorrisAction()
    {
        return array();
    }
    
    /**
     * @Route("/tables", name="_admin-dashboard2_tables")
     * @Template()
     */
    public function tablesAction()
    {
        return array();
    }
    
    /**
     * @Route("/forms", name="_admin-dashboard2_forms")
     * @Template()
     */
    public function formsAction()
    {
        return array();
    }
    
    /**
     * @Route("/panels-wells", name="_admin-dashboard2_panels-wells")
     * @Template()
     */
    public function panelsWellsAction()
    {
        return array();
    }
    
    /**
     * @Route("/buttons", name="_admin-dashboard2_buttons")
     * @Template()
     */
    public function buttonsAction()
    {
        return array();
    }
    
    /**
     * @Route("/notifications", name="_admin-dashboard2_notifications")
     * @Template()
     */
    public function notificationsAction()
    {
        return array();
    }
    
    /**
     * @Route("/typography", name="_admin-dashboard2_typography")
     * @Template()
     */
    public function typographyAction()
    {
        return array();
    }
    
    /**
     * @Route("/grid", name="_admin-dashboard2_grid")
     * @Template()
     */
    public function gridAction()
    {
        return array();
    }
    
    /**
     * @Route("/blank-page", name="_admin-dashboard2_blank-page")
     * @Template()
     */
    public function blankPageAction()
    {
        return array();
    }
    
    /**
     * @Route("/login", name="_admin-dashboard2_login")
     * @Template()
     */
    public function loginAction()
    {
        return array();
    }
    
    
}