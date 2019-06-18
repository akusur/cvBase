<?php
// src/Controller/loginController.php


namespace App\Controller;

//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class loginController extends AbstractController
{
	 /**
     * @Route("/login/number")
     */
    public function number(LoggerInterface $logger)
    {
		
        $number = random_int(0, 100);
		$url = $this->generateUrl('app_login_number', ['max' => 10]);
		$logger->info('We are logging!');
		return $this->render('lucky/number.html.twig', ['number' => $number]);
        // return new Response(
            // '<html><body>Lucky login: '.$number.'
			// <br>This URL = '.$url.'
			// </body></html>'
        // );
    }
	 /**
     * @Route("/login")
     */
    public function login()
    {
        $number = random_int(0, 100);

        return new Response(
           '<html><body>Lucky login: '.$number.'</body></html>'
        );
    }
	
}

?>