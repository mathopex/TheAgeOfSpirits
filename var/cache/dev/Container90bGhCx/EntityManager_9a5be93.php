<?php

namespace Container90bGhCx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getConnection', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getMetadataFactory', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getExpressionBuilder', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'beginTransaction', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getCache', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'transactional', array('func' => $func), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'commit', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->commit();
    }

    public function rollback()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'rollback', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'createQuery', array('dql' => $dql), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'createQueryBuilder', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'flush', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'clear', array('entityName' => $entityName), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'close', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->close();
    }

    public function persist($entity)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'persist', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'remove', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'refresh', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'detach', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'merge', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'contains', array('entity' => $entity), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getEventManager', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getConfiguration', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'isOpen', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getUnitOfWork', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getProxyFactory', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'getFilters', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'isFiltersStateClean', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, 'hasFilters', array(), $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        return $this->valueHoldere46fb->hasFilters();
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

        $instance->initializer329e1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere46fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere46fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere46fb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer329e1 && ($this->initializer329e1->__invoke($valueHoldere46fb, $this, '__get', ['name' => $name], $this->initializer329e1) || 1) && $this->valueHoldere46fb = $valueHoldere46fb;

        if (isset(self::$publicPropertiesea611[$name])) {
            return $this->valueHoldere46fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
