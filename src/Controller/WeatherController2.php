<?php

namespace App\Controller;

use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController2 extends AbstractController
{
    /**
     * @Route("/weather/{location}", name="weather")
     */
    public function index(WeatherService $weatherService, $location)
    {
        $data = $weatherService->getWeatherByLocation($location);
        return $this->render('weather/index.html.twig', [
            'data' => $data,
        ]);
    }
}
