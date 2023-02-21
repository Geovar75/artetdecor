<?php

namespace ContainerFtUjEXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypesense_Command_ImportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'typesense.command.import' shared service.
     *
     * @return \ACSEO\TypesenseBundle\Command\ImportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'acseo'.\DIRECTORY_SEPARATOR.'typesense-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ImportCommand.php';

        $container->services['typesense.command.import'] = $instance = new \ACSEO\TypesenseBundle\Command\ImportCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['typesense.collection_manager'] ?? $container->load('getTypesense_CollectionManagerService')), ($container->services['typesense.document_manager'] ?? $container->load('getTypesense_DocumentManagerService')), ($container->services['typesense.transformer.doctrine_to_typesense'] ?? $container->load('getTypesense_Transformer_DoctrineToTypesenseService')));

        $instance->setName('typesense:import');

        return $instance;
    }
}