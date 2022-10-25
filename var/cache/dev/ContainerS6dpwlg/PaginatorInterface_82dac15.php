<?php

namespace ContainerS6dpwlg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1960d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f3c5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa96a5 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        if ($this->valueHolder1960d === $returnValue = $this->valueHolder1960d->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer6f3c5 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder1960d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder1960d = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, '__get', ['name' => $name], $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        if (isset(self::$publicPropertiesa96a5[$name])) {
            return $this->valueHolder1960d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1960d;

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

        $targetObject = $this->valueHolder1960d;
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
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1960d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1960d;
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
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, '__isset', array('name' => $name), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1960d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1960d;
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
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, '__unset', array('name' => $name), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1960d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1960d;
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
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, '__clone', array(), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        $this->valueHolder1960d = clone $this->valueHolder1960d;
    }

    public function __sleep()
    {
        $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, '__sleep', array(), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;

        return array('valueHolder1960d');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f3c5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f3c5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6f3c5 && ($this->initializer6f3c5->__invoke($valueHolder1960d, $this, 'initializeProxy', array(), $this->initializer6f3c5) || 1) && $this->valueHolder1960d = $valueHolder1960d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1960d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1960d;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
