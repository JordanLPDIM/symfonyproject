<?php

namespace App\Service;

use GuzzleHttp\Client;

class LocationService
{
    private $apiUrl;
    private $client;

    public function __construct()
    {
        $this->apiUrl = 'https://nominatim.org/';
        $this->client = new Client();
    }

    public function getLocation(string $location): array
    {
        $response = $this->client->get($this->apiUrl.'/search?q='.$location.'&format=json');
        $data = json_decode($response->getBody(), true);
        return $data;
    }
}
