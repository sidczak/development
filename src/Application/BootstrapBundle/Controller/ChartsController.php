<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ChartsController extends Controller
{

    /**
     * @Route("/morris", name="_charts_morris")
     * @Template()
     */
    public function morrisChartsAction()
    {
        return array();
    }
    
    /**
     * @Route("/flot", name="_charts_flot")
     * @Template()
     */
    public function flotChartsAction()
    {
        return array();
    }
    
    /**
     * @Route("/xcharts", name="_charts_xcharts")
     * @Template()
     */
    public function xchartsAction()
    {
        return array();
    }
    
    /**
     * @Route("/chartjs", name="_charts_chartjs")
     * @Template()
     */
    public function chartjsAction()
    {
        return array();
    }
    
    /**
     * @Route("/google", name="_charts_google")
     * @Template()
     */
    public function googleChartsAction()
    {
        return array();
    }
    
    /**
     * @Route("/sparkline", name="_charts_sparkline")
     * @Template()
     */
    public function sparklineChartsAction()
    {
        return array();
    }
    
    /**
     * @Route("/knob", name="_charts_knob")
     * @Template()
     */
    public function knobChartsAction()
    {
        return array();
    }
    
    /**
     * @Route("/knob-movie", name="_charts_knob-movie")
     * @Template()
     */
    public function knobChartsMovieAction()
    {
        return array();
    }
    
}