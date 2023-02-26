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
use Symfony\Component\HttpClient\HttpClient;

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
    public function index(Request $request, TweetsRepository $tweetsRepository): Response
    {    
        $apiKey = '1bf50decfeddb5417e85af87bf14cef0';
        $city = 'Calais'; // replace with your desired location

        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric");

        $weatherData = json_decode($response->getContent(), true); // decode JSON response

        $temperature = $weatherData['main']['temp']; 
        
        $description = $weatherData['weather'][0]['description']; 
        $weatherIconCode = $weatherData["weather"][0]["icon"];

        $entities = $tweetsRepository->findAll();


        $tweet = new Tweets();
        $form = $this->createForm(TweetsType::class, $tweet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tweet->setDate(new \DateTime()); 
            $user = $this->getUser();

            if ($user) {
                $userId = $user->getId();
                $tweet->setUser($userId);
            } else {
                return $this->redirectToRoute('app_login');
            }
            $entityManager = $this->em->getManager();
            $entityManager->persist($tweet);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        


        return $this->render('home/index.html.twig', [
            'entities' => $entities,
            'temperature' => $temperature,
            'weatherIcon' => $weatherIconCode,
            'form' => $form->createView(),
        ]);
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
            $tweet->setDate(new \DateTime()); 
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
