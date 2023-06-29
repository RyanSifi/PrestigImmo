<?php

namespace ContainerSuIT5rS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PersisterLoader.php';

class PersisterLoader_c8a8e24 extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Loader\PersisterLoader|null wrapped object, if the proxy is initialized
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

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PersisterLoader
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'withPersister', array('persister' => $persister), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        return $this->valueHolderddbfa->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($instance);

        $instance->initializer4f510 = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister, ?\Psr\Log\LoggerInterface $logger = null, array $processors = [])
    {
        static $reflection;

        if (! $this->valueHolderddbfa) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');
            $this->valueHolderddbfa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);

        }

        $this->valueHolderddbfa->__construct($decoratedLoader, $persister, $logger, $processors);
    }

    public function & __get($name)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__get', ['name' => $name], $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        if (isset(self::$publicProperties51d7c[$name])) {
            return $this->valueHolderddbfa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);
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

if (!\class_exists('PersisterLoader_c8a8e24', false)) {
    \class_alias(__NAMESPACE__.'\\PersisterLoader_c8a8e24', 'PersisterLoader_c8a8e24', false);
}
