<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ExamplesController extends Controller
{

    /**
     * @Route("/navbar", name="_examples_navbar")
     * @Template()
     */
    public function navbarAction()
    {
        return array();
    }
    
    /**
     * @Route("/navbar-static-top", name="_examples_navbar-static-top")
     * @Template()
     */
    public function navbarStaticTopAction()
    {
        return array();
    }
    
    /**
     * @Route("/navbar-fixed-top", name="_examples_navbar-fixed-top")
     * @Template()
     */
    public function navbarFixedTopAction()
    {
        return array();
    }
    
    /**
     * @Route("/navbar-fixed-bottom", name="_examples_navbar-fixed-bottom")
     * @Template()
     */
    public function navbarFixedBottomAction()
    {
        return array();
    }
    
    /**
     * @Route("/navbar-static-top-sticky-footer", name="_examples_navbar-static-top-sticky-footer")
     * @Template()
     */
    public function navbarStaticTopStickyFooterAction()
    {
        return array();
    }
    
    /**
     * @Route("/navbar-fixed-top-sticky-footer", name="_examples_navbar-fixed-top-sticky-footer")
     * @Template()
     */
    public function navbarFixedTopStickyFooterAction()
    {
        return array();
    }
    
    /**
     * @Route("/navbar-justified", name="_examples_navbar-justified")
     * @Template()
     */
    public function navbarJustifiedAction()
    {
        return array();
    }
    
    /**
     * @Route("/sidebar-offcanvas", name="_examples_sidebar-offcanvas")
     * @Template()
     */
    public function sidebarOffcanvasAction()
    {
        return array();
    }
    
    /**
     * @Route("/carousel", name="_examples_carousel")
     * @Template()
     */
    public function carouselAction()
    {
        return array();
    }
    
    /**
     * @Route("/jumbotron", name="_examples_jumbotron")
     * @Template()
     */
    public function jumbotronAction()
    {
        return array();
    }
    
    /**
     * @Route("/jumbotron-narrow", name="_examples_jumbotron-narrow")
     * @Template()
     */
    public function jumbotronNarrowAction()
    {
        return array();
    }
    
    /**
     * @Route("/grid", name="_examples_grid")
     * @Template()
     */
    public function gridAction()
    {
        return array();
    }
    
    /**
     * @Route("/elements", name="_examples_elements")
     * @Template()
     */
    public function elementsAction()
    {
        return array();
    }
    
    /**
     * @Route("/theme", name="_examples_theme")
     * @Template()
     */
    public function themeAction()
    {
        $session = $this->getRequest()->getSession();
		$session->set('theme', 'bootstrap-theme');
		$theme = $session->get('theme');
    	
        return array($theme);
    }
    
    /**
     * @Route("/theme-off", name="_examples_theme-off")
     * @Template()
     */
    public function themeOffAction()
    {
        //session_destroy();
    	$session = $this->getRequest()->getSession();
    	$session->remove('theme');
    	return array();
    }
    
    /**
     * @Route("/non-responsive", name="_examples_non-responsive")
     * @Template()
     */
    public function nonResponsiveAction()
    {
        return array();
    }
    
    /**
     * @Route("/tooltip-viewport", name="_examples_tooltip-viewport")
     * @Template()
     */
    public function tooltipViewportAction()
    {
        return array();
    }
    
    /**
     * @Route("/template-starter", name="_examples_template-starter")
     * @Template()
     */
    public function templateStarterAction()
    {
        return array();
    }
    
    /**
     * @Route("/template-cover", name="_examples_template-cover")
     * @Template()
     */
    public function templateCoverAction()
    {
        return array();
    }
    
    /**
     * @Route("/template-blog", name="_examples_template-blog")
     * @Template()
     */
    public function templateBlogAction()
    {
        return array();
    }
    
    /**
     * @Route("/admin-signin", name="_examples_admin-signin")
     * @Template()
     */
    public function adminSigninAction()
    {
        return array();
    }
    
    /**
     * @Route("/admin-dashboard", name="_examples_admin-dashboard")
     * @Template()
     */
    public function adminDashboardAction()
    {
        return array();
    }

}
