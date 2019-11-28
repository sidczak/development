<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MailboxController extends Controller
{

    /**
     * @Route("/mailbox-AdminLTE", name="_mailbox_mailbox-AdminLTE")
     * @Template()
     */
    public function mailboxAdminLTEAction()
    {
        return array();
    }
    
    /**
     * @Route("/mailbox-DevOOPS", name="_mailbox_mailbox-DevOOPS")
     * @Template()
     */
    public function mailboxDevOOPSAction()
    {
        return array();
    }
    
    /**
     * @Route("/feed-DevOOPS", name="_mailbox_feed-DevOOPS")
     * @Template()
     */
    public function feedDevOOPSAction()
    {
        return array();
    }

}