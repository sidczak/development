<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WidgetsController extends Controller
{

    /**
     * @Route("/boxes", name="_widgets_boxes")
     * @Template()
     */
    public function boxesAction()
    {
        return array();
    }
    
    /**
     * @Route("/panels", name="_widgets_panels")
     * @Template()
     */
    public function panelsAction()
    {
        return array();
    }
    
    /**
     * @Route("/alerts", name="_widgets_alerts")
     * @Template()
     */
    public function alertsAction()
    {
        return array();
    }
    
    /**
     * @Route("/tooltip-and-popover", name="_widgets_tooltip_popover")
     * @Template()
     */
    public function tooltipAndPopoverAction()
    {
        return array();
    }
    
    /**
     * @Route("/modals", name="_widgets_modals")
     * @Template()
     */
    public function modalsAction()
    {
        return array();
    }
    
    /**
     * @Route("/notice", name="_widgets_notice")
     * @Template()
     */
    public function noticeAction()
    {
        return array();
    }
    
    /**
     * @Route("/growl-notifications", name="_widgets_growl-notifications")
     * @Template()
     */
    public function growlNotificationsAction()
    {
        return array();
    }
    
    /**
     * @Route("/tabs", name="_widgets_tabs")
     * @Template()
     */
    public function tabsAction()
    {
        return array();
    }
    
}