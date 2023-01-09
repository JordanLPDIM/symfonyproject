<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TweetsRepository;
use App\Form\FormTweetType;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TweetsRepository $TweetsRepository, FormTweetType $FormTweet): Response
    {    
        $entities = $TweetsRepository->findAll();
        $form = $this->createForm(FormTweetType::class);

        return $this->render('home/index.html.twig',array(
            'entities' => $entities, 'form' => $form,
        ));
    }
   
    public function new(Request $request, TweetsRepository $TweetsRepository, FormTweetType $form): Reponse
    {
      
        $form->handleRequest($request);

        $content = $request->get('content');
        $idUser = 1;
        $dt = 1649318400;
        $Date = date( "d/m/Y H:i:s", $dt );

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();            
        }

        //$Tweets tweet = new Tweets();
        
        try{
            $TweetsRepository->save($data);
        } catch (\Exception $e) {
            // Display an error message
            return view('error', ['message' => $e->getMessage()]);
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);


    }
}
