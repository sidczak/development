<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FormsController extends Controller
{

    /**
     * @Route("/bootstrap-basic", name="_forms_bootstrap-basic")
     * @Template()
     */
    public function bootstrapBasicAction()
    {
        return array();
    }
    
    /**
     * @Route("/general-elements-LTE", name="_forms_general-elements-LTE")
     * @Template()
     */
    public function generalElementsLTEAction()
    {
        return array();
    }
    
    /**
     * @Route("/general-elements-DevOOPS", name="_forms_general-elements-DevOOPS")
     * @Template()
     */
    public function generalElementsDevOOPSAction()
    {
        return array();
    }
    
    /**
     * @Route("/advanced-elements-DevOOPS", name="_forms_advanced-elements-DevOOPS")
     * @Template()
     */
    public function advancedElementsDevOOPSAction()
    {
        return array();
    }
    
    /**
     * @Route("/checkbox-radio-DevOOPS", name="_forms_checkbox-radio-DevOOPS")
     * @Template()
     */
    public function checkboxRadioDevOOPSAction()
    {
        return array();
    }
    
    /**
    
    /**
     * @Route("/select2-bootstrap", name="_forms_select2Bootstrap")
     * @Template()
     */
    public function select2BootstrapAction()
    {
        return array();
    }
    
    /**
     * @Route("/toggle", name="_forms_toggle")
     * @Template()
     */
    public function toggleAction()
    {
        return array();
    }
    
    /**
     * @Route("/iCheck", name="_forms_iCheck")
     * @Template()
     */
    public function iCheckAction()
    {
        return array();
    }
    
    /**
     * @Route("/datetimepicker", name="_forms_datetimepicker")
     * @Template()
     */
    public function datetimepickerAction()
    {
        return array();
    }
    
    /**
     * @Route("/daterangepicker", name="_forms_daterangepicker")
     * @Template()
     */
    public function daterangepickerAction()
    {
        return array();
    }
    
    /**
     * @Route("/datepicker-jqueryui", name="_forms_datepicker-jqueryui")
     * @Template()
     */
    public function datepickerjQueryUIAction()
    {
        return array();
    }
    
	/**
     * @Route("/inputmask", name="_forms_inputmask")
     * @Template()
     */
    public function inputmaskAction()
    {
        return array();
    }

}