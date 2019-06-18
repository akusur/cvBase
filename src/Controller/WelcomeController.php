<?php
// src/Controller/WelcomeController.php
namespace App\Controller;

// ...
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/nesto", name="welcome", methods={"GET"})
     */
    public function nesto()
    {
        return new Response(
			'<a href="#">Home</a>'
		);
    }
}
?>