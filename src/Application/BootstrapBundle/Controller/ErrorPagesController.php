<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ErrorPagesController extends Controller
{

    /**
     * @Route("/error-404-basic", name="_error-pages_error-404-basic")
     * @Template()
     */
    public function error404BasicAction()
    {
        return array();
    }
    
    /**
     * @Route("/error-500-basic", name="_error-pages_error-500-basic")
     * @Template()
     */
    public function error500BasicAction()
    {
        return array();
    }
    
    /**
     * @Route("/offline-basic", name="_error-pages_offline-basic")
     * @Template()
     */
    public function offlineBasicAction()
    {
        return array();
    }
    
    /**
     * @Route("/under-construction-basic", name="_error-pages_under-construction-basic")
     * @Template()
     */
    public function underConstructionBasicAction()
    {
        return array();
    }
    
    /**
     * @Route("/under-construction-bcore", name="_error-pages_under-construction-bcore")
     * @Template()
     */
    public function underConstructionBcoreAction()
    {
        return array();
    }
    
    /**
     * @Route("/lockscreen-basic", name="_error-pages_lockscreen-basic")
     * @Template()
     */
    public function lockscreenBasicAction()
    {
        return array();
    }
    
}