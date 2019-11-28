<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MapsController extends Controller
{

    /**
     * @Route("/Google-Maps", name="_maps_google-maps")
     * @Template()
     */
    public function googleMapsAction()
    {
        return array();
    }
    
    /**
     * @Route("/Google-Maps-Fullscreen", name="_maps_google-maps-fullscreen")
     * @Template()
     */
    public function googleMapsFullscreenAction()
    {
        return array();
    }
    
    /**
     * @Route("/Google-Maps-Sattelite", name="_maps_google-maps-sattelite")
     * @Template()
     */
    public function googleMapsSatteliteAction()
    {
        return array();
    }
    
    /**
     * @Route("/jVectorMap", name="_maps_jVectorMap")
     * @Template()
     */
    public function jVectorMapAction()
    {
        return array();
    }
    
    
    
    
}