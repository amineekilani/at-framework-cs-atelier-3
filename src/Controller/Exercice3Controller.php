<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Exercice3Controller extends AbstractController
{
    #[Route('/exercice3', name: 'app_exercice3')]
    public function index(): Response
    {
        return $this->render('exercice3/index.html.twig', [
            'controller_name' => 'Exercice3Controller',
        ]);
    }
    #[Route('/exercice3/lister', name: 'app_exercice3_lister')]
    public function lister(): Response
    {
        $Articles=[ 
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'],  
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'],  
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume', 'date_publication' => '2020-03-10', 'auteur' => 'Nidhal'], 
        ];
        return $this->render('exercice3/index.html.twig', ['article'=>$Articles]);
    }
    #[Route('/exercice3/lister/{auteur}', name: 'app_article_lister_auteur')]
    public function listeParAuteur(String $auteur): Response
    {
        $Articles=[ 
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'],  
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'],  
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume', 'date_publication' => '2020-03-10', 'auteur' => 'Nidhal'], 
        ];

        return $this->render('exercice3/index.html.twig',
        ['article'=>array_filter($Articles, fn($article) => $article['auteur'] === $auteur)]);
    }
}