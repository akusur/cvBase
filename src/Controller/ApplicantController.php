<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApplicantController extends AbstractController
{
    /**
     * @Route("/application-form", name="applicant")
     */
    public function index()
    {
        return $this->render('applicant/index.html.twig', [
            'controller_name' => 'ApplicantController',
        ]);
    }
	/**
     * @Route("/applicants-list", name="applicants-list")
     */
    public function ListApplicantss()
    {
        return $this->render('applicant/applicants-list.html.twig', [
            'controller_name' => 'ApplicantController',
        ]);
    }
}
