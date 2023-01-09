<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;


class WeatherController extends AbstractController
{
    public function showWeather(Request $request)
    {
        $apiKey = '1bf50decfeddb5417e85af87bf14cef0';
        $city = $request->query->get('city');
        $units = 'metric';

        if (!$city) {
            $city = 'Paris';
        }
       
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => $city,
                'units' => $units,
                'appid' => $apiKey,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $content = $response->getContent();

        if ($statusCode == 200) {
            $weatherData = json_decode($content, true);
            
        } else {
            echo "erreur du get";
        }

       

        return $this->render('weather/show.html.twig', [
            'weatherData' => $weatherData,
        ]);
    }
}


?>