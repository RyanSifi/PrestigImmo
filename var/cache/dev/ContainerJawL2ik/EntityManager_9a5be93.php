<?php

namespace ContainerJawL2ik;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb4f3c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd9984 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc169f = [
        
    ];

    public function getConnection()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getConnection', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getMetadataFactory', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getExpressionBuilder', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'beginTransaction', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getCache', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'transactional', array('func' => $func), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'commit', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->commit();
    }

    public function rollback()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'rollback', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getClassMetadata', array('className' => $className), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'createQuery', array('dql' => $dql), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'createNamedQuery', array('name' => $name), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'createQueryBuilder', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'flush', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'clear', array('entityName' => $entityName), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->clear($entityName);
    }

    public function close()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'close', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->close();
    }

    public function persist($entity)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'persist', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'remove', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'refresh', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'detach', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'merge', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'contains', array('entity' => $entity), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getEventManager', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getConfiguration', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'isOpen', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getUnitOfWork', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getProxyFactory', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'initializeObject', array('obj' => $obj), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'getFilters', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'isFiltersStateClean', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'hasFilters', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->hasFilters();
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

        $instance->initializerd9984 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb4f3c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb4f3c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb4f3c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__get', ['name' => $name], $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        if (isset(self::$publicPropertiesc169f[$name])) {
            return $this->valueHolderb4f3c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4f3c;

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

        $targetObject = $this->valueHolderb4f3c;
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
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4f3c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4f3c;
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
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__isset', array('name' => $name), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4f3c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb4f3c;
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
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__unset', array('name' => $name), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4f3c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb4f3c;
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
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__clone', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        $this->valueHolderb4f3c = clone $this->valueHolderb4f3c;
    }

    public function __sleep()
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__sleep', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return array('valueHolderb4f3c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd9984 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd9984;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'initializeProxy', array(), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb4f3c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb4f3c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
