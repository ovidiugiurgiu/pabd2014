<?php

namespace Giurgiu\OvidiuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
	
	public function paginaAction($name) 
	{
		return $this->render('GiurgiuOvidiuBundle:Users:users.html.twig',
			array('name' => $name)
		);
	}
	
	public function contactAction($name) 
	{
		return $this->render('GiurgiuOvidiuBundle:Users:contact.html.twig',
			array('name' => $name)
		);
	}
	
	public function despreAction($name) 
	{
		return $this->render('GiurgiuOvidiuBundle:Users:despre.html.twig',
			array('name' => $name)
		);
	}
}
