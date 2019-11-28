<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TimelineController extends Controller
{

    /**
     * @Route("/timeline-LTE", name="_timeline_timeline-LTE")
     * @Template()
     */
    public function timelineLTEAction()
    {
        return array();
    }
    
    /**
     * @Route("/timeline-BCORE", name="_timeline_timeline-BCORE")
     * @Template()
     */
    public function timelineBCOREAction()
    {
        return array();
    }

}