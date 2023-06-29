<?php

namespace ContainerSuIT5rS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'ObjectManagerPersister.php';

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister|null wrapped object, if the proxy is initialized
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

    public function persist(object $object) : void
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'persist', array('object' => $object), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        $this->valueHolderddbfa->persist($object);
return;
    }

    public function flush() : void
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, 'flush', array(), $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        $this->valueHolderddbfa->flush();
return;
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);

        $instance->initializer4f510 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolderddbfa) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolderddbfa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolderddbfa->__construct($manager);
    }

    public function & __get($name)
    {
        $this->initializer4f510 && ($this->initializer4f510->__invoke($valueHolderddbfa, $this, '__get', ['name' => $name], $this->initializer4f510) || 1) && $this->valueHolderddbfa = $valueHolderddbfa;

        if (isset(self::$publicProperties51d7c[$name])) {
            return $this->valueHolderddbfa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
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

if (!\class_exists('ObjectManagerPersister_eccc052', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersister_eccc052', 'ObjectManagerPersister_eccc052', false);
}
