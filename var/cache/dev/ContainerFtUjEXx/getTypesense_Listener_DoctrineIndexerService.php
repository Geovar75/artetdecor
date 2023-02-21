<?php

namespace ContainerFtUjEXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypesense_Listener_DoctrineIndexerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'typesense.listener.doctrine_indexer' shared service.
     *
     * @return \ACSEO\TypesenseBundle\EventListener\TypesenseIndexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'acseo'.\DIRECTORY_SEPARATOR.'typesense-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TypesenseIndexer.php';

        return $container->services['typesense.listener.doctrine_indexer'] = new \ACSEO\TypesenseBundle\EventListener\TypesenseIndexer(($container->services['typesense.collection_manager'] ?? $container->load('getTypesense_CollectionManagerService')), ($container->services['typesense.document_manager'] ?? $container->load('getTypesense_DocumentManagerService')), ($container->services['typesense.transformer.doctrine_to_typesense'] ?? $container->load('getTypesense_Transformer_DoctrineToTypesenseService')));
    }
}
