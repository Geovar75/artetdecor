<?php

namespace ContainerZBOgNnM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8703 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb240c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescbd13 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getConnection', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getMetadataFactory', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getExpressionBuilder', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'beginTransaction', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getCache', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'transactional', array('func' => $func), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'commit', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->commit();
    }

    public function rollback()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'rollback', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getClassMetadata', array('className' => $className), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'createQuery', array('dql' => $dql), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'createNamedQuery', array('name' => $name), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'createQueryBuilder', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'flush', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'clear', array('entityName' => $entityName), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->clear($entityName);
    }

    public function close()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'close', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->close();
    }

    public function persist($entity)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'persist', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'remove', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'refresh', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'detach', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'merge', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'contains', array('entity' => $entity), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getEventManager', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getConfiguration', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'isOpen', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getUnitOfWork', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getProxyFactory', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'initializeObject', array('obj' => $obj), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'getFilters', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'isFiltersStateClean', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'hasFilters', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return $this->valueHolderc8703->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb240c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc8703) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8703 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8703->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, '__get', ['name' => $name], $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        if (isset(self::$publicPropertiescbd13[$name])) {
            return $this->valueHolderc8703->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8703;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8703;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8703;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8703;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, '__isset', array('name' => $name), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8703;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc8703;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, '__unset', array('name' => $name), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8703;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc8703;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, '__clone', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        $this->valueHolderc8703 = clone $this->valueHolderc8703;
    }

    public function __sleep()
    {
        $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, '__sleep', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;

        return array('valueHolderc8703');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb240c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb240c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb240c && ($this->initializerb240c->__invoke($valueHolderc8703, $this, 'initializeProxy', array(), $this->initializerb240c) || 1) && $this->valueHolderc8703 = $valueHolderc8703;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8703;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8703;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
