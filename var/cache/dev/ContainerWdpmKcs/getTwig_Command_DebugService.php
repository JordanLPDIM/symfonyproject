<?php

namespace ContainerWdpmKcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Command_DebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($container->privates['twig'] ?? $container->getTwigService()), 'C:\\symfonyproject', $container->parameters['kernel.bundles_metadata'], 'C:\\symfonyproject/templates', ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:twig');
        $instance->setDescription('Show a list of twig functions, filters, globals and tests');

        return $instance;
    }
}
