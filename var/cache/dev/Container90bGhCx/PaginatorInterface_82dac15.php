<?php

namespace Container90bGhCx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere46fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer329e1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesea611 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        if ($this->valueHoldere46fb === $returnValue = $this->valueHoldere46fb->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer329e1 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere46fb) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere46fb = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__get', ['name' => $name], $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        if (isset(self::$publicPropertiesea611[$name])) {
            return $this->valueHoldere46fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere46fb;

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

        $targetObject = $this->valueHoldere46fb;
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
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere46fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere46fb;
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
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__isset', array('name' => $name), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere46fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere46fb;
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
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__unset', array('name' => $name), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere46fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere46fb;
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
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__clone', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        $this->valueHoldere46fb = clone $this->valueHoldere46fb;
    }

    public function __sleep()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__sleep', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return array('valueHoldere46fb');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer329e1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer329e1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'initializeProxy', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere46fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere46fb;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
