<?php

namespace ContainerL26vbvb;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1705b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8d795 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8d5e = [
        
    ];

    public function getConnection()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getConnection', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getMetadataFactory', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getExpressionBuilder', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'beginTransaction', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getCache', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'transactional', array('func' => $func), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'commit', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->commit();
    }

    public function rollback()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'rollback', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getClassMetadata', array('className' => $className), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'createQuery', array('dql' => $dql), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'createNamedQuery', array('name' => $name), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'createQueryBuilder', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'flush', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'clear', array('entityName' => $entityName), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->clear($entityName);
    }

    public function close()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'close', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->close();
    }

    public function persist($entity)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'persist', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'remove', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'refresh', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'detach', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'merge', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'contains', array('entity' => $entity), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getEventManager', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getConfiguration', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'isOpen', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getUnitOfWork', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getProxyFactory', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'initializeObject', array('obj' => $obj), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'getFilters', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'isFiltersStateClean', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'hasFilters', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return $this->valueHolder1705b->hasFilters();
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

        $instance->initializer8d795 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1705b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1705b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1705b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, '__get', ['name' => $name], $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        if (isset(self::$publicPropertiese8d5e[$name])) {
            return $this->valueHolder1705b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1705b;

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

        $targetObject = $this->valueHolder1705b;
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
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1705b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1705b;
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
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, '__isset', array('name' => $name), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1705b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1705b;
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
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, '__unset', array('name' => $name), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1705b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1705b;
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
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, '__clone', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        $this->valueHolder1705b = clone $this->valueHolder1705b;
    }

    public function __sleep()
    {
        $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, '__sleep', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;

        return array('valueHolder1705b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8d795 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8d795;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8d795 && ($this->initializer8d795->__invoke($valueHolder1705b, $this, 'initializeProxy', array(), $this->initializer8d795) || 1) && $this->valueHolder1705b = $valueHolder1705b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1705b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1705b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
