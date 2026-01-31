<?php

namespace App\Controller\Blog;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class BlogController extends AbstractController
{
    #[Route('/', name: 'app_home', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'Blog/BlogController',
        ]);
    }
}
