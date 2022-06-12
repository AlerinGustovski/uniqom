<?php

namespace ContainerULiBxhg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc9714 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerce736 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc417 = [
        
    ];

    public function getConnection()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getConnection', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getMetadataFactory', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getExpressionBuilder', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'beginTransaction', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getCache', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getCache();
    }

    public function transactional($func)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'transactional', array('func' => $func), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'wrapInTransaction', array('func' => $func), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'commit', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->commit();
    }

    public function rollback()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'rollback', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getClassMetadata', array('className' => $className), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'createQuery', array('dql' => $dql), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'createNamedQuery', array('name' => $name), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'createQueryBuilder', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'flush', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'clear', array('entityName' => $entityName), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->clear($entityName);
    }

    public function close()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'close', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->close();
    }

    public function persist($entity)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'persist', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'remove', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'refresh', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'detach', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'merge', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getRepository', array('entityName' => $entityName), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'contains', array('entity' => $entity), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getEventManager', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getConfiguration', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'isOpen', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getUnitOfWork', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getProxyFactory', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'initializeObject', array('obj' => $obj), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'getFilters', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'isFiltersStateClean', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'hasFilters', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return $this->valueHolderc9714->hasFilters();
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

        $instance->initializerce736 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc9714) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9714 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc9714->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, '__get', ['name' => $name], $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        if (isset(self::$publicPropertiesdc417[$name])) {
            return $this->valueHolderc9714->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9714;

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

        $targetObject = $this->valueHolderc9714;
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
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9714;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9714;
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
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, '__isset', array('name' => $name), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9714;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc9714;
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
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, '__unset', array('name' => $name), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9714;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc9714;
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
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, '__clone', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        $this->valueHolderc9714 = clone $this->valueHolderc9714;
    }

    public function __sleep()
    {
        $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, '__sleep', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;

        return array('valueHolderc9714');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerce736 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerce736;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerce736 && ($this->initializerce736->__invoke($valueHolderc9714, $this, 'initializeProxy', array(), $this->initializerce736) || 1) && $this->valueHolderc9714 = $valueHolderc9714;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9714;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc9714;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
