<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SliderController extends Controller
{

    /**
     * @Route("/slider_bootstrap", name="_slider_bootstrap")
     */
    public function sliderBootstrapAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderBootstrap.html.twig');
    }
    
    /**
     * @Route("/slider_bootstrap_animation", name="_slider_bootstrap_animation")
     */
    public function sliderBootstrapAnimationAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderBootstrapAnimation.html.twig');
    }
    
    /**
     * @Route("/slider_flexslider", name="_slider_flexslider")
     */
    public function sliderFlexsliderAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderFlexslider.html.twig');
    }
    
    /**
     * @Route("/slider_flexslider_animation", name="_slider_flexslider_animation")
     */
    public function sliderFlexsliderAnimationAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderFlexsliderAnimation.html.twig');
    }

    /**
     * @Route("/slider_sequence_documentation", name="_slider_sequence_documentation")
     */
    public function sliderSequenceDocumentationAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderSequenceDocumentation.html.twig');
    }
    
    /**
     * @Route("/slider_sequence_modern", name="_slider_sequence_modern")
     */
    public function sliderSequenceModernAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderSequenceModern.html.twig');
    }
    
    /**
     * @Route("/slider_sequence_horizontal_parallax", name="_slider_sequence_horizontal_parallax")
     */
    public function sliderSequenceHorizontalParallaxAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderSequenceHorizontalParallax.html.twig');
    }
    
    /**
     * @Route("/slider_sequence_apple", name="_slider_sequence_apple")
     */
    public function sliderSequenceAppleAction()
    {
        return $this->render('ApplicationToolsBundle:Start:sliderSequenceApple.html.twig');
    }

}
