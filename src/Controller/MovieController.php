<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
  


    #[Route('/movie', name: 'movie' )]
    public function index():Response
    {
        
        return $this->render('index.html.twig' , ['title' => '']);
      
    }




}
