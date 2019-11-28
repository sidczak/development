<?php

namespace Application\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationToolsBundle:Contact:index.html.twig');
    }
}
