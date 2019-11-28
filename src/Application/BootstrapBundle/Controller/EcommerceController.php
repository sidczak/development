<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EcommerceController extends Controller
{

    /**
     * @Route("/heroic-features", name="_ecommerce_heroic-features")
     * @Template()
     */
    public function heroicFeaturesAction()
    {
        return array();
    }
    
    /**
     * @Route("/shop-homepage", name="_ecommerce_shop-homepage")
     * @Template()
     */
    public function shopHomepageAction()
    {
        return array();
    }
    
    /**
     * @Route("/shop-item", name="_ecommerce_shop-item")
     * @Template()
     */
    public function shopItemAction()
    {
        return array();
    }
    
    /**
     * @Route("/invoice-adminLTE", name="_ecommerce_invoice-adminLTE")
     * @Template()
     */
    public function invoiceAdminLTEAction()
    {
        return array();
    }
    
    /**
     * @Route("/invoice-devoops", name="_ecommerce_invoice-devoops")
     * @Template()
     */
    public function invoiceDevOOPSAction()
    {
        return array();
    }
    
    /**
     * @Route("/pricing-devoops", name="_ecommerce_pricing-devoops")
     * @Template()
     */
    public function pricingDevOOPSAction()
    {
        return array();
    }
    
    /**
     * @Route("/pricing-bcore", name="_ecommerce_pricing-bcore")
     * @Template()
     */
    public function pricingBCOREAction()
    {
        return array();
    }

}