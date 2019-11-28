<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SlidersController extends Controller
{

    /**
     * @Route("/jQueryUiSlider", name="_sliders_jQueryUiSlider")
     * @Template()
     */
    public function jQueryUiSliderAction()
    {
        return array();
    }

}