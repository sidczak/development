<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PortfolioController extends Controller
{

    /**
     * @Route("/portfolio-col1", name="_portfolio_portfolio-col1")
     * @Template()
     */
    public function portfolioCol1Action()
    {
        return array();
    }
    
    /**
     * @Route("/portfolio-col2", name="_portfolio_portfolio-col2")
     * @Template()
     */
    public function portfolioCol2Action()
    {
        return array();
    }
    
    /**
     * @Route("/portfolio-col3", name="_portfolio_portfolio-col3")
     * @Template()
     */
    public function portfolioCol3Action()
    {
        return array();
    }
    
    /**
     * @Route("/portfolio-col4", name="_portfolio_portfolio-col4")
     * @Template()
     */
    public function portfolioCol4Action()
    {
        return array();
    }
    
    /**
     * @Route("/portfolio-item", name="_portfolio_portfolio-item")
     * @Template()
     */
    public function portfolioItemAction()
    {
        return array();
    }
    
    /**
     * @Route("/thumbnail-gallery", name="_portfolio_thumbnail-gallery")
     * @Template()
     */
    public function thumbnailGalleryAction()
    {
        return array();
    }

}