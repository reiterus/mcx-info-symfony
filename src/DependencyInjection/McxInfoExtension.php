<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Bundle extension
 *
 * @package Reiterus\McxInfoBundle\DependencyInjection
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxInfoExtension extends Extension
{
    const ALIAS = 'reiterus_mcx_info';
    const MAIN_DATA = 'all_main_data';
    const CONTROLLER = 'reiterus_mcx_info.mcx_info_controller';

    /**
     * Get a bundle alias
     *
     * @return string
     */
    public function getAlias(): string
    {
        return self::ALIAS;
    }

    /**
     * Loading a specific configuration
     *
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        if (isset($config[self::MAIN_DATA])) {
            $container->setAlias(
                'reiterus_mcx_info.all_main_data',
                $config[self::MAIN_DATA]
            );
        }

        $definition = $container->getDefinition(self::CONTROLLER);

        $definition->setArgument(2, $config['contacts']);
        $definition->setArgument(3, $config['pretty']);
    }
}