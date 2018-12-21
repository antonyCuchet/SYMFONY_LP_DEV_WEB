<?php
// src/Controller/ContainerController.php
namespace App\Controller;

use App\Entity\Container;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContainerController extends AbstractController
{
    public function show()
    {
	$containers = $this->getDoctrine()->getRepository(Container::class)->findAll();
	return $this->render('container.html.twig',
		['containers' => $containers]);
    }
}
