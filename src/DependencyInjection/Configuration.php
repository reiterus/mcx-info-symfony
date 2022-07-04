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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @package Reiterus\McxInfoBundle\DependencyInjection
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Building the configuration tree
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder(McxInfoExtension::ALIAS);

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode(McxInfoExtension::MAIN_DATA)->defaultNull()->end()
            ->arrayNode('persons')->end()
            ->arrayNode('contacts')
            ->scalarPrototype()->end()
            ->end()
            ->booleanNode('pretty')->defaultFalse()->end()
            ->end();

        return $treeBuilder;
    }
}
