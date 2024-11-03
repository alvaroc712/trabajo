<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.shop.command_handler.upload_logos_handler' shared service.

return $this->services['prestashop.adapter.shop.command_handler.upload_logos_handler'] = new \PrestaShop\PrestaShop\Adapter\Shop\CommandHandler\UploadLogosHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.core.shop.logo_uploader'] ?? $this->load('getPrestashop_Core_Shop_LogoUploaderService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
