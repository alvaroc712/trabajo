<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2bd1b = null;
    private $initializer50296 = null;
    private static $publicProperties84fee = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getList', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getInstalledModules', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getMustBeConfiguredModules', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getUpgradableModules', array(), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'setActionUrls', array('collection' => $collection), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        return $this->valueHolder2bd1b->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer50296 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder2bd1b) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder2bd1b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder2bd1b->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer50296 && ($this->initializer50296->__invoke($valueHolder2bd1b, $this, '__get', ['name' => $name], $this->initializer50296) || 1) && $this->valueHolder2bd1b = $valueHolder2bd1b;
        if (isset(self::$publicProperties84fee[$name])) {
            return $this->valueHolder2bd1b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
