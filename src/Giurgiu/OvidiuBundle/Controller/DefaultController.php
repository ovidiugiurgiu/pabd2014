<?php

namespace Giurgiu\OvidiuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GiurgiuOvidiuBundle:Default:index.html.twig', array('name' => $name));
    }
}
