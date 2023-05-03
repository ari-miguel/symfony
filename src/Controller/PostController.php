<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Form\PostType;


class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(): Response
    {
        $post = new Post();
        
        $form = $this->createForm(PostType::class, $post);
        return $this->render('post/index.html.twig', [
            'formulario' => $form,
        ]);
    }
}
