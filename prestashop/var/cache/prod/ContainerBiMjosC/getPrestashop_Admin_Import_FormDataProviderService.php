<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.import.form_data_provider' shared service.

return $this->services['prestashop.admin.import.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormDataProvider(($this->services['prestashop.core.import.file_finder'] ?? $this->load('getPrestashop_Core_Import_FileFinderService.php')), ($this->services['session'] ?? $this->getSessionService()));
