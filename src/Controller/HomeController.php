<?php

namespace App\Controller;

use App\Repository\HardSkillRepository;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(
        HardSkillRepository $hsRepo,
        ProjectRepository $projectRepo,
    ): Response {
        $hardSkills = $hsRepo->findBy(['showOnFrontPage' => true]);
        $projects = $projectRepo->findBy(['showOnFrontPage' => true]);

        return $this->render('home/index.html.twig', [
            'hardSkills' => $hardSkills,
            "projects" => $projects,
        ]);
    }
}
