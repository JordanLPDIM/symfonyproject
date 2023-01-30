<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TweetsRepository;
use App\Form\FormTweetType;
use App\Form\TweetsType;
use App\Entity\Tweets;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(TweetsRepository $TweetsRepository): Response
    {    
        $entities = $TweetsRepository->findAll();
       
        return $this->render('home/index.html.twig',array(
            'entities' => $entities
        ));
    }

    
    public function new(Request $request, TweetsRepository $tweetsRepository): Reponse
    {
         $tweet = new Tweets();
         
         $content = $request->getContent();
         dump($content);

         $form = $this->createForm(TweetsType::class, $tweet);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
           $tweetsRepository->save($tweet);
           dump($tweet);
        }
        else{
            dump($tweet);
        }

        

        return $this->render('home/index.html.twig');


    }
}
