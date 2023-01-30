<?php

namespace ContainerHoUq1ps;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_Visitor_ConstraintService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.extractor.visitor.constraint' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\Visitor\ConstraintVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['translation.extractor.visitor.constraint'] = new \Symfony\Component\Translation\Extractor\Visitor\ConstraintVisitor([0 => 'Expression', 1 => 'Email', 2 => 'NotCompromisedPassword', 3 => 'When', 4 => '', 5 => 'UserPassword']);
    }
}
