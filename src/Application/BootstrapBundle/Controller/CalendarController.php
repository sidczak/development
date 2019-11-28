<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CalendarController extends Controller
{

    /**
     * @Route("/fullcalendar", name="_calendar_fullcalendar")
     * @Template()
     */
    public function fullcalendarAction()
    {
        return array();
    }

}