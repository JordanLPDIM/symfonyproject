<?php

namespace ContainerHoUq1ps;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z1Cxq8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z1_Cxq8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z1_Cxq8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'TweetsRepository' => ['privates', 'App\\Repository\\TweetsRepository', 'getTweetsRepositoryService', true],
        ], [
            'TweetsRepository' => 'App\\Repository\\TweetsRepository',
        ]);
    }
}
