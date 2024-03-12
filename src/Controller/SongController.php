<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{   
    #[Route('/api/songs/{id<\d+>}',methods: ['GET'],name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger):Response
    {
        
        $songs = [
            1 => ['name' => 'Ive got my eyes on you (Say Yes To Heaven)', 'url' => '/audio/Lana Del Rey - Ive got my eyes on you (Say Yes To Heaven) (Lyrics).mp3'],
            2 => ['name' => 'The Night We Met  ', 'url' => '/audio/Lord Huron - The Night We Met Lyrics.mp3'],
            3 => ['name' => 'My love mine all mine', 'url' => '/audio/My love mine all mine Mitski(lyrics).mp3'],
            4 => ['name' => 'Wainek Min Zaman', 'url' => '/audiWainek Min Zaman  يزن حيفاوي - وينك من زمان.mp3"'],
 
        ];

        
        return $this->json($songs[$id]);
    }

}