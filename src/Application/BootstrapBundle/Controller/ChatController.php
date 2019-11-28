<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ChatController extends Controller
{

    /**
     * @Route("/chat-BCORE", name="_chat_chat-BCORE")
     * @Template()
     */
    public function chatBCOREAction()
    {
        return array();
    }
    
    /**
     * @Route("/chat-LTE", name="_chat_chat-LTE")
     * @Template()
     */
    public function chatLTEAction()
    {
        return array();
    }
    
}