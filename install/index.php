<?php

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

class yngc0der_oauth2server extends CModule
{
    public function __construct()
    {
        Loc::loadMessages(__FILE__);

        $arModuleVersion = [];
        include __DIR__ . '/version.php';

        $this->MODULE_ID = 'yngc0der.oauth2server';
        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        $this->MODULE_NAME = Loc::getMessage('YC_OAUTH2SERVER_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('YC_OAUTH2SERVER_MODULE_DESC');
        $this->PARTNER_NAME = Loc::getMessage('YC_PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('YC_PARTNER_URI');
    }

    public function DoInstall(): void
    {
        /** @var CMain $APPLICATION */
        global $APPLICATION;

        if ($this->checkRequirements()) {
            ModuleManager::registerModule($this->MODULE_ID);

            $this->InstallDB();
            $this->InstallEvents();
            $this->InstallFiles();
            $this->InstallTasks();
        } else {
            $APPLICATION->ThrowException(Loc::getMessage('YC_INSTALL_ERROR_REQUIREMENTS'));
        }

        $APPLICATION->IncludeAdminFile(
            Loc::getMessage('YC_INSTALL_TITLE'),
            $this->getPath() . '/install/step.php'
        );
    }

    public function DoUninstall(): void
    {
        /** @var CMain $APPLICATION */
        global $APPLICATION;

        $request = Context::getCurrent()->getRequest();

        if ((int)$request->get('step') <= 1) {
            $APPLICATION->IncludeAdminFile(
                Loc::getMessage('YC_UNINSTALL_TITLE'),
                $this->getPath() . '/install/unstep.php'
            );
        }

        if ((int)$request->get('step') === 2) {
            $this->UnInstallDB();
            $this->UnInstallEvents();
            $this->UnInstallFiles();
            $this->UnInstallTasks();

            Loader::clearModuleCache($this->MODULE_ID);
            ModuleManager::unRegisterModule($this->MODULE_ID);
        }
    }

    public function InstallDB(): void
    {
        /** @var CMain $APPLICATION */
        global $APPLICATION;

        $connection = Application::getConnection();
        $errors = $connection->executeSqlBatch(file_get_contents($this->getPath() . '/install/mysql/install.sql'));
        if (count($errors) > 0) {
            $msg = array_reduce($errors, function (string $error): string {
                return sprintf('<pre>%s</pre><br>', $error);
            }, '');
            $APPLICATION->ThrowException($msg);
        }
    }

    public function UnInstallDB(): void
    {
        /** @var CMain $APPLICATION */
        global $APPLICATION;
        
        $connection = Application::getConnection();
        $errors = $connection->executeSqlBatch(file_get_contents($this->getPath() . '/install/mysql/uninstall.sql'));
        if (count($errors) > 0) {
            $msg = array_reduce($errors, function (string $error): string {
                return sprintf('<pre>%s</pre><br>', $error);
            }, '');
            $APPLICATION->ThrowException($msg);
        }
    }

    public function checkRequirements(): bool
    {
        return CheckVersion(ModuleManager::getVersion('main'), '20.00.00');
    }

    public function getPath(bool $includeDocumentRoot = true): string
    {
        return $includeDocumentRoot
            ? dirname(__DIR__)
            : (string)str_ireplace(Application::getDocumentRoot(), '', dirname(__DIR__));
    }
}
