<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function index(): Response
    {
        return $this->render('gamme/index.html.twig', [
            'controller_name' => 'GammeController',
        ]);
    }
    #[Route('/gamme/lister', name: 'app_gamme_lister')]
    public function lister(): Response
    {
        $Gamme=["Ordinateur","vidéoprojecteur","Imprimante","accessoire"];
        return $this->render('gamme/Lister.html.twig', ['gamme'=>$Gamme]);
    }
    #[Route('/gamme/lister2', name: 'app_gamme_lister2')]
    public function lister2(): Response
    {
        $Articles=[ 
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'],  
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'],  
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume', 'date_publication' => '2020-03-10', 'auteur' => 'Nidhal'], 
        ];
        return $this->render('gamme/Lister2.html.twig', ['article'=>$Articles]);
    }
    #[Route('/gamme/lister2/{auteur}', name: 'app_gamme_lister2_auteur')]
    public function lister2auteur(): Response
    {
        $Articles=[ 
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'],  
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'],  
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume', 'date_publication' => '2020-03-10', 'auteur' => 'Nidhal'], 
        ];
        return $this->render('gamme/Lister2.html.twig', ['article'=>$Articles]);
    }
}