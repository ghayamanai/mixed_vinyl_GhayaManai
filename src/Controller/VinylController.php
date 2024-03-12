<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
class VinylController  extends AbstractController
{
    #[Route("/", name :'app_homepage')]
    public function homepage() : Response
    {
        $tracks = [
            ['song' => 'Ive got my eyes on you (Say Yes To Heaven)', 'artist' => 'Lana Del'],
            ['song' => 'The Night We Met ', 'artist' => 'Lord Huron'],
            ['song' => 'My love mine all mine ', 'artist' => 'Lana Del rey '],
            ['song' => 'Wainek Min Zaman', 'artist' => 'Yazan Haifawi'],

        ];
    return $this->render('vinyl/homepage.html.twig',[
        'title'=> 'PB & Jams',
        'tracks'=>$tracks,
    ]);
    }
    #[Route('/browse/{slug}',name : 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: '.u(str_replace('-', ' ', $slug))->title(true):null;

        return $this->render('vinyl/browse.html.twig' , ['genre'=> $genre,
    ]);

    }
}