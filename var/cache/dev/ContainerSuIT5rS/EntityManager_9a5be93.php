<?php

namespace ContainerSuIT5rS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderddbfa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4f510 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties51d7c = [
        
    ];

    public function getConnection()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getConnection', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getMetadataFactory', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getExpressionBuilder', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'beginTransaction', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getCache', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'transactional', array('func' => $func), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'commit', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->commit();
    }

    public function rollback()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'rollback', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'createQuery', array('dql' => $dql), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'createQueryBuilder', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'flush', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'clear', array('entityName' => $entityName), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->clear($entityName);
    }

    public function close()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'close', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->close();
    }

    public function persist($entity)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'persist', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'remove', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'refresh', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'detach', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'merge', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'contains', array('entity' => $entity), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getEventManager', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getConfiguration', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'isOpen', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getUnitOfWork', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getProxyFactory', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'getFilters', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'isFiltersStateClean', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'hasFilters', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->hasFilters();
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

        $instance->initializer4f510 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderddbfa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderddbfa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderddbfa->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__get', ['name' => $name], $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        if (isset(self::$publicProperties51d7c[$name])) {
            return $this->valueHolderddbfa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddbfa;

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

        $targetObject = $this->valueHolderddbfa;
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
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddbfa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderddbfa;
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
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__isset', array('name' => $name), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddbfa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderddbfa;
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
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__unset', array('name' => $name), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddbfa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderddbfa;
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
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__clone', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        $this->valueHolderddbfa = clone $this->valueHolderddbfa;
    }

    public function __sleep()
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__sleep', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return array('valueHolderddbfa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f510 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f510;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'initializeProxy', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderddbfa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderddbfa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
