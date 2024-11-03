<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2bd1b = null;
    private $initializer50296 = null;
    private static $publicProperties84fee = [
        
    ];
    public function getConnection()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getConnection', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getMetadataFactory', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getExpressionBuilder', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'beginTransaction', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getCache', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getCache();
    }
    public function transactional($func)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'transactional', array('func' => $func), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'commit', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->commit();
    }
    public function rollback()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'rollback', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getClassMetadata', array('className' => $className), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'createQuery', array('dql' => $dql), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'createNamedQuery', array('name' => $name), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'createQueryBuilder', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'flush', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'clear', array('entityName' => $entityName), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->clear($entityName);
    }
    public function close()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'close', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->close();
    }
    public function persist($entity)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'persist', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'remove', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'refresh', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'detach', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'merge', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'contains', array('entity' => $entity), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getEventManager', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getConfiguration', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'isOpen', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getUnitOfWork', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getProxyFactory', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'initializeObject', array('obj' => $obj), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getFilters', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'isFiltersStateClean', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'hasFilters', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer50296 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2bd1b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2bd1b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2bd1b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__get', ['name' => $name], $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        if (isset(self::$publicProperties84fee[$name])) {
            return $this->valueHolder2bd1b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bd1b;
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
        $targetObject = $this->valueHolder2bd1b;
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
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bd1b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2bd1b;
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
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__isset', array('name' => $name), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bd1b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2bd1b;
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
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__unset', array('name' => $name), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2bd1b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2bd1b;
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
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__clone', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        $this->valueHolder2bd1b = clone $this->valueHolder2bd1b;
    }
    public function __sleep()
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__sleep', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return array('valueHolder2bd1b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer50296 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer50296;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'initializeProxy', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2bd1b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2bd1b;
    }
}
