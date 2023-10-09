<?php

namespace App\Controller;

use App\Entity\JobOffer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobsController extends AbstractController
{
    #[Route('/jobs', name: 'app_jobs')]
    public function index(): Response
    {
        return $this->render('jobs/index.html.twig', [
            'controller_name' => 'JobsController',
        ]);
    }

    #[Route('/jobs/{id}/show', name: 'app_show')]
    public function show(): Response
    {
        return $this->render('jobs/show.html.twig', [
            // 'jobOffer' => $jobOffer
        ]);
    }
}
