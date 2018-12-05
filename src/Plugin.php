<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE_VAIMO.txt for license details.
 */
namespace Vaimo\GeckoDriver;

class Plugin implements \Composer\Plugin\PluginInterface, \Composer\EventDispatcher\EventSubscriberInterface
{
    /**
     * @var \Vaimo\GeckoDriver\Installer
     */
    private $driverInstaller;

    public function activate(\Composer\Composer $composer, \Composer\IO\IOInterface $io)
    {
        $this->driverInstaller = new \Vaimo\GeckoDriver\Installer($composer, $io);
    }
    
    public static function getSubscribedEvents()
    {
        return [
            \Composer\Script\ScriptEvents::POST_INSTALL_CMD => 'installDriver',
            \Composer\Script\ScriptEvents::POST_UPDATE_CMD => 'installDriver',
        ];
    }
    
    public function installDriver()
    {
        $this->driverInstaller->execute();
    }
}
