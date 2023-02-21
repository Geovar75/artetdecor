<?php

namespace ContainerFtUjEXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_DoctrineEntityPropertyHydratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.doctrine_entity_property_hydrator' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Hydrator\DoctrineEntityPropertyHydrator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'PropertyHydratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Hydrator'.\DIRECTORY_SEPARATOR.'DoctrineEntityPropertyHydrator.php';

        return $container->privates['ux.live_component.doctrine_entity_property_hydrator'] = new \Symfony\UX\LiveComponent\Hydrator\DoctrineEntityPropertyHydrator([0 => ($container->services['doctrine'] ?? $container->getDoctrineService())]);
    }
}