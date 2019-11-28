<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AboutUsController extends Controller
{

    /**
     * @Route("/", name="_aboutUs")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/experience", name="_aboutUs_experience")
     * @Template()
     */
    public function experienceAction()
    {
        return array();
    }
    /**
     * @Route("/training", name="_aboutUs_training")
     * @Template()
     */
    public function trainingAction()
    {
        return array();
    }
    /**
     * @Route("/skill", name="_aboutUs_skill")
     * @Template()
     */
    public function skillAction()
    {
        return array();
    }

}
