<?php

namespace ContainerWdpmKcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Mailer_MessageListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['twig'] ?? $container->getTwigService());

        if (isset($container->privates['twig.mailer.message_listener'])) {
            return $container->privates['twig.mailer.message_listener'];
        }

        return $container->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer($a));
    }
}
