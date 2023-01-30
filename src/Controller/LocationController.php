<?php

namespace App\Controller;

use App\Service\LocationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    /**
     * @Route("/location/{location}", name="location")
     */
    public function index(LocationService $locationService, $location)
    {
        $data = $locationService->getLocation($location);
        return $this->render('location/index.html.twig', [
            'data' => $data,
        ]);
    }
}
