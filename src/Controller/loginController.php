<?php
// src/Controller/loginController.php


namespace App\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

class loginController extends AbstractController
{
	 /**
     * @Route("/login")
     */
    public function login()
    {
		 return $this->render('login/login.html.twig');
    }
	/**
	* @Route("/login/number")
	*/
    public function number()
    {
       return $this->render('login/login.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
	
}

?>