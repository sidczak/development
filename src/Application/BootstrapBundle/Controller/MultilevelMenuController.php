<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MultilevelMenuController extends Controller
{
	
    /**
     * @Route("/multilevel-menu-admin-dashboard", name="_multilevel-menu_admin-dashboard")
     * @Template()
     */
    public function multilevelMenuAdminDashboardAction()
    {
        return array();
    }
    /**
     * @Route("/multilevel-menu-admin-dashboard2", name="_multilevel-menu_admin-dashboard2")
     * @Template()
     */
    public function multilevelMenuAdminDashboard2Action()
    {
        return array();
    }

    /**
     * @Route("/multilevel-menu-brand", name="_multilevel-menu_brand")
     * @Template()
     */
    public function multilevelMenuBrandAction()
    {
        return array();
    }
    
    /**
     * @Route("/multilevel-menu-bcore", name="_multilevel-menu_bcore")
     * @Template()
     */
    public function multilevelMenuBcoreAction()
    {
        return array();
    }
    
    /**
     * @Route("/multilevel-menu-devoops", name="_multilevel-menu_devoops")
     * @Template()
     */
    public function multilevelMenuDevoopsAction()
    {
        return array();
    }
    
    /**
     * @Route("/multilevel-menu-navbar", name="_multilevel-menu_navbar")
     * @Template()
     */
    public function multilevelMenuNavbarAction()
    {
        return array();
    }
    
    /**
     * @Route("/bootstrap-submenu", name="_bootstrap-submenu")
     * @Template()
     */
    public function bootstrapSubmenuAction()
    {
        return array();
    }
    
    /**
     * @Route("/dropdown-submenu", name="_dropdown-submenu")
     * @Template()
     */
    public function dropdownSubmenuAction()
    {
        return array();
    }
    
    /**
     * @Route("/mega-menu", name="_mega-menu")
     * @Template()
     */
    public function megaMenuAction()
    {
        return array();
    }
    
    /**
     * @Route("/mega-menu-nike", name="_mega-menu-nike")
     * @Template()
     */
    public function megaMenuNikeAction()
    {
        return array();
    }
    /**
     * @Route("/large-dropdown-menu", name="_large-dropdown-menu")
     * @Template()
     */
    public function largeDropdownMenuAction()
    {
        return array();
    }

}