<?php

namespace ContainerZBOgNnM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypesense_CollectionManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'typesense.collection_manager' shared service.
     *
     * @return \ACSEO\TypesenseBundle\Manager\CollectionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'acseo'.\DIRECTORY_SEPARATOR.'typesense-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'CollectionManager.php';

        return $container->services['typesense.collection_manager'] = new \ACSEO\TypesenseBundle\Manager\CollectionManager(($container->services['typesense.collection_client'] ?? $container->load('getTypesense_CollectionClientService')), ($container->services['typesense.transformer.doctrine_to_typesense'] ?? $container->load('getTypesense_Transformer_DoctrineToTypesenseService')), ['products' => ['typesense_name' => 'products', 'entity' => 'App\\Entity\\Product', 'name' => 'products', 'fields' => ['id' => ['name' => 'id', 'type' => 'primary', 'entity_attribute' => 'id'], 'sortable_id' => ['entity_attribute' => 'id', 'name' => 'sortable_id', 'type' => 'int32'], 'name' => ['name' => 'name', 'type' => 'string', 'entity_attribute' => 'name'], 'slug' => ['name' => 'slug', 'type' => 'string', 'entity_attribute' => 'slug'], 'image' => ['name' => 'image', 'type' => 'string', 'entity_attribute' => 'image'], 'subtitles' => ['name' => 'subtitles', 'type' => 'string', 'entity_attribute' => 'subtitles'], 'description' => ['name' => 'description', 'type' => 'string', 'entity_attribute' => 'description'], 'price' => ['name' => 'price', 'type' => 'float', 'entity_attribute' => 'price'], 'category' => ['name' => 'category', 'type' => 'string', 'entity_attribute' => 'product']], 'default_sorting_field' => 'sortable_id', 'token_separators' => [], 'symbols_to_index' => []]]);
    }
}