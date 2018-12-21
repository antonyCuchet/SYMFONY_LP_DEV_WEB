<?php
// src/Controller/ContainershipController.php
namespace App\Controller;

use App\Entity\Containership;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContainershipController extends AbstractController
{
    public function show()
    {
	$containerships = $this->getDoctrine()->getRepository(Containership::class)->findAll();
	return $this->render('containership.html.twig',
		['containerships' => $containerships]);
    }
}
