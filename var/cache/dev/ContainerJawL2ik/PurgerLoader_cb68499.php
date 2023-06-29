<?php

namespace ContainerJawL2ik;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PurgerLoader.php';

class PurgerLoader_cb68499 extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Loader\PurgerLoader|null wrapped object, if the proxy is initialized
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

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PurgerLoader
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'withPersister', array('persister' => $persister), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        return $this->valueHolderb4f3c->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($instance);

        $instance->initializerd9984 = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PurgerFactoryInterface $purgerFactory, string $defaultPurgeMode, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolderb4f3c) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');
            $this->valueHolderb4f3c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);

        }

        $this->valueHolderb4f3c->__construct($decoratedLoader, $purgerFactory, $defaultPurgeMode, $logger);
    }

    public function & __get($name)
    {
        $this->initializerd9984 && ($this->initializerd9984->__invoke($valueHolderb4f3c, $this, '__get', ['name' => $name], $this->initializerd9984) || 1) && $this->valueHolderb4f3c = $valueHolderb4f3c;

        if (isset(self::$publicPropertiesc169f[$name])) {
            return $this->valueHolderb4f3c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);
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

if (!\class_exists('PurgerLoader_cb68499', false)) {
    \class_alias(__NAMESPACE__.'\\PurgerLoader_cb68499', 'PurgerLoader_cb68499', false);
}
