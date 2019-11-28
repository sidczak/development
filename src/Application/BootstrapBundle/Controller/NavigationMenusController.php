<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NavigationMenusController extends Controller
{

    /**
     * @Route("/scrollingNav", name="_navigation-menus_scrollingNav")
     * @Template()
     */
    public function scrollingNavAction()
    {
        return array();
    }
    
    /**
     * @Route("/logoNav", name="_navigation-menus_logoNav")
     * @Template()
     */
    public function logoNavAction()
    {
        return array();
    }
    
    /**
     * @Route("/simpleSidebar", name="_navigation-menus_simpleSidebar")
     * @Template()
     */
    public function simpleSidebarAction()
    {
        return array();
    }
    
    /**
     * @Route("/simpleSidebarFluid", name="_navigation-menus_simpleSidebarFluid")
     * @Template()
     */
    public function simpleSidebarFluidAction()
    {
        return array();
    }
    
    /**
     * @Route("/simpleSidebarOnTop", name="_navigation-menus_simpleSidebarOnTop")
     * @Template()
     */
    public function simpleSidebarOnTopAction()
    {
        return array();
    }
    
    /**
     * @Route("/simpleSidebarFluidOnTop", name="_navigation-menus_simpleSidebarFluidOnTop")
     * @Template()
     */
    public function simpleSidebarFluidOnTopAction()
    {
        return array();
    }

}