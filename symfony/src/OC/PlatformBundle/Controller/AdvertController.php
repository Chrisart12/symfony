<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
	public function indexAction()
	{
		return new Response("Mon premier hello world !");
	}
}