<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
	
	
	
    /**
     * @Route("/users", name="users")
     */
    public function index()
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    } 
	/**
     * @Route("/users-list", name="users-list")
     */
    public function ListUsers()
    {
        return $this->render('users/users-list.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    } 
	/**
     * @Route("/profile", name="profile")
     */
    public function ViewProfile()
    {
        return $this->render('users/profile.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }
}
