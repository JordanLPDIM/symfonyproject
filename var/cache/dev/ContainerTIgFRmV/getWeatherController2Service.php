<?php

namespace ContainerTIgFRmV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeatherController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\WeatherController2' shared autowired service.
     *
     * @return \App\Controller\WeatherController2
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\WeatherController2'] = $instance = new \App\Controller\WeatherController2();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\WeatherController2', $container));

        return $instance;
    }
}
