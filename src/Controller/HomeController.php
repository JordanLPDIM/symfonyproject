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
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Doctrine\Persistence\ManagerRegistry;

class HomeController extends AbstractController
{

    private $em;

    public function __construct(ManagerRegistry $doctrine)
{
    $this->em = $doctrine;
}

    

    /**
     * @Route("/", name="app_home")
     */
    public function index(TweetsRepository $tweetsRepository): Response
    {    
        $entities = $tweetsRepository->findAll();
       
        return $this->render('home/index.html.twig',array(
            'entities' => $entities
        ));
    }

    /**
     * @Route("/new", name="app_new_tweet")
     */
    public function new(Request $request, TweetsRepository $tweetsRepository, ManagerRegistry $doctrine): Response
    {
        $tweet = new Tweets();
        $form = $this->createForm(TweetsType::class, $tweet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->em->getManager();
            $entityManager->persist($tweet);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
