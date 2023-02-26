<?php

namespace ContainerJ2uZ4Pc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HomeController' shared autowired service.
     *
     * @return \App\Controller\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HomeController'] = $instance = new \App\Controller\HomeController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\HomeController', $container));

        return $instance;
    }
}
