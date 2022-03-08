<?php

namespace ContainerXuSI9FK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a8db = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer70dab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6b946 = [
        
    ];

    public function getConnection()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getConnection', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getMetadataFactory', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getExpressionBuilder', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'beginTransaction', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getCache', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getCache();
    }

    public function transactional($func)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'transactional', array('func' => $func), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->transactional($func);
    }

    public function commit()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'commit', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->commit();
    }

    public function rollback()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'rollback', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getClassMetadata', array('className' => $className), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'createQuery', array('dql' => $dql), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'createNamedQuery', array('name' => $name), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'createQueryBuilder', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'flush', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'clear', array('entityName' => $entityName), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->clear($entityName);
    }

    public function close()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'close', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->close();
    }

    public function persist($entity)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'persist', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'remove', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'refresh', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'detach', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'merge', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getRepository', array('entityName' => $entityName), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'contains', array('entity' => $entity), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getEventManager', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getConfiguration', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'isOpen', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getUnitOfWork', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getProxyFactory', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'initializeObject', array('obj' => $obj), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'getFilters', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'isFiltersStateClean', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'hasFilters', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return $this->valueHolder4a8db->hasFilters();
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

        $instance->initializer70dab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4a8db) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a8db = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4a8db->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, '__get', ['name' => $name], $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        if (isset(self::$publicProperties6b946[$name])) {
            return $this->valueHolder4a8db->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a8db;

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

        $targetObject = $this->valueHolder4a8db;
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
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a8db;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a8db;
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
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, '__isset', array('name' => $name), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a8db;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a8db;
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
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, '__unset', array('name' => $name), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a8db;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a8db;
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
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, '__clone', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        $this->valueHolder4a8db = clone $this->valueHolder4a8db;
    }

    public function __sleep()
    {
        $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, '__sleep', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;

        return array('valueHolder4a8db');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer70dab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer70dab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer70dab && ($this->initializer70dab->__invoke($valueHolder4a8db, $this, 'initializeProxy', array(), $this->initializer70dab) || 1) && $this->valueHolder4a8db = $valueHolder4a8db;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a8db;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a8db;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
