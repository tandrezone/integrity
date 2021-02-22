<?php

namespace Container7l9i1YM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4ce8b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere9beb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab063 = [
        
    ];

    public function getConnection()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getConnection', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getMetadataFactory', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getExpressionBuilder', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'beginTransaction', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getCache', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getCache();
    }

    public function transactional($func)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'transactional', array('func' => $func), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->transactional($func);
    }

    public function commit()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'commit', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->commit();
    }

    public function rollback()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'rollback', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getClassMetadata', array('className' => $className), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'createQuery', array('dql' => $dql), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'createNamedQuery', array('name' => $name), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'createQueryBuilder', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'flush', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'clear', array('entityName' => $entityName), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->clear($entityName);
    }

    public function close()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'close', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->close();
    }

    public function persist($entity)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'persist', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'remove', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'refresh', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'detach', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'merge', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'contains', array('entity' => $entity), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getEventManager', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getConfiguration', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'isOpen', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getUnitOfWork', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getProxyFactory', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'initializeObject', array('obj' => $obj), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'getFilters', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'isFiltersStateClean', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'hasFilters', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return $this->valueHolder4ce8b->hasFilters();
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

        $instance->initializere9beb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4ce8b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4ce8b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4ce8b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, '__get', ['name' => $name], $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        if (isset(self::$publicPropertiesab063[$name])) {
            return $this->valueHolder4ce8b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ce8b;

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

        $targetObject = $this->valueHolder4ce8b;
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
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ce8b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4ce8b;
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
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, '__isset', array('name' => $name), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ce8b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4ce8b;
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
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, '__unset', array('name' => $name), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ce8b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4ce8b;
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
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, '__clone', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        $this->valueHolder4ce8b = clone $this->valueHolder4ce8b;
    }

    public function __sleep()
    {
        $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, '__sleep', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;

        return array('valueHolder4ce8b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere9beb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere9beb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere9beb && ($this->initializere9beb->__invoke($valueHolder4ce8b, $this, 'initializeProxy', array(), $this->initializere9beb) || 1) && $this->valueHolder4ce8b = $valueHolder4ce8b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4ce8b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4ce8b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
