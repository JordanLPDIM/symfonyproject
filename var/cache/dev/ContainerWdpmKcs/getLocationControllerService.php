<?php

namespace ContainerWdpmKcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LocationController' shared autowired service.
     *
     * @return \App\Controller\LocationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LocationController'] = $instance = new \App\Controller\LocationController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\LocationController', $container));

        return $instance;
    }
}
