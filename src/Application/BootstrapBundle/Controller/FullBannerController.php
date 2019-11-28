<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FullBannerController extends Controller
{

    /**
     * @Route("/full", name="_full-banner_full")
     * @Template()
     */
    public function fullAction()
    {
        return array();
    }

	/**
     * @Route("/full-slider", name="_full-banner_full-slider")
     * @Template()
     */
    public function fullSliderAction()
    {
        return array();
    }

    /**
     * @Route("/full-width-pics", name="_full-banner_full-width-pics")
     * @Template()
     */
    public function fullWidthPicsAction()
    {
        return array();
    }
    
    /**
     * @Route("/half-slider", name="_full-banner_half-slider")
     * @Template()
     */
    public function halfSliderAction()
    {
        return array();
    }
    
    /**
     * @Route("/the-big-picture", name="_full-banner_the-big-picture")
     * @Template()
     */
    public function theBigPictureAction()
    {
        return array();
    }
}