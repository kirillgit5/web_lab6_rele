<?php

namespace ContainerBO8Gaj3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a29f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer40167 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescef5b = [
        
    ];

    public function getConnection()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getConnection', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getMetadataFactory', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getExpressionBuilder', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'beginTransaction', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getCache', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'transactional', array('func' => $func), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'commit', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->commit();
    }

    public function rollback()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'rollback', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getClassMetadata', array('className' => $className), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'createQuery', array('dql' => $dql), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'createNamedQuery', array('name' => $name), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'createQueryBuilder', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'flush', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'clear', array('entityName' => $entityName), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->clear($entityName);
    }

    public function close()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'close', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->close();
    }

    public function persist($entity)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'persist', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'remove', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'refresh', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'detach', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'merge', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'contains', array('entity' => $entity), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getEventManager', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getConfiguration', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'isOpen', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getUnitOfWork', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getProxyFactory', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'initializeObject', array('obj' => $obj), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'getFilters', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'isFiltersStateClean', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'hasFilters', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return $this->valueHolder1a29f->hasFilters();
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

        $instance->initializer40167 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1a29f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a29f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a29f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, '__get', ['name' => $name], $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        if (isset(self::$publicPropertiescef5b[$name])) {
            return $this->valueHolder1a29f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a29f;

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

        $targetObject = $this->valueHolder1a29f;
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
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a29f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a29f;
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
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, '__isset', array('name' => $name), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a29f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a29f;
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
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, '__unset', array('name' => $name), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a29f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a29f;
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
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, '__clone', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        $this->valueHolder1a29f = clone $this->valueHolder1a29f;
    }

    public function __sleep()
    {
        $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, '__sleep', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;

        return array('valueHolder1a29f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer40167 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer40167;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer40167 && ($this->initializer40167->__invoke($valueHolder1a29f, $this, 'initializeProxy', array(), $this->initializer40167) || 1) && $this->valueHolder1a29f = $valueHolder1a29f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a29f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a29f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
