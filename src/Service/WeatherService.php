<?php

namespace App\Service;

use GuzzleHttp\Client;

class WeatherService
{
    private $apiUrl;
    private $apiKey;
    private $client;

    public function __construct(string $apiUrl, string $apiKey)
    {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
        $this->client = new Client();
    }

    public function getWeatherByLocation(string $location): array
    {
        $response = $this->client->get($this->apiUrl.'/weather?q='.$location.'&appid='.$this->apiKey);
        $data = json_decode($response->getBody(), true);
        return $data;
    }
}
