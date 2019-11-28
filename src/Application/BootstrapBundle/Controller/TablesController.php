<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TablesController extends Controller
{

    /**
     * @Route("/basic-table", name="_table_basic")
     * @Template()
     */
    public function basicTableAction()
    {
        return array();
    }
    
    /**
     * @Route("/responsive-table", name="_table_responsive")
     * @Template()
     */
    public function responsiveTableAction()
    {
        return array();
    }
    
    /**
     * @Route("/hidden-col-table", name="_table_hidden-col")
     * @Template()
     */
    public function hiddenColTableAction()
    {
        return array();
    }
    
    /**
     * @Route("/datatables", name="_table_datatables")
     * @Template()
     */
    public function dataTablesAction()
    {
        return array();
    }
    
    /**
     * @Route("/bootstrap-table", name="_table_bootstrap-table")
     * @Template()
     */
    public function bootstrapTableAction()
    {
        return array();
    }
    
    /**
     * @Route("/editor-datatables", name="_table_editor-datatables")
     * @Template()
     */
    public function editorDataTablesAction()
    {
        return array();
    }
    
    /**
     * @Route("/beauty-table", name="_table_beauty")
     * @Template()
     */
    public function beautyTableAction()
    {
        return array();
    }
    
    /**
     * @Route("/table-buttons", name="_table_buttons")
     * @Template()
     */
    public function buttonsTableAction()
    {
        return array();
    }

}