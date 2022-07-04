<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\DependencyInjection\Compiler;

use Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Container preparation
 *
 * @package Reiterus\McxInfoBundle\DependencyInjection\Compiler
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class ProcessCompilerPass implements CompilerPassInterface
{
    /**
     * Change container before reset in PHP
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $references = [];
        $definition = $container->getDefinition(McxInfoExtension::CONTROLLER);
        $taggedServices = $container->findTaggedServiceIds('tag_mcx_info_persons');

        foreach ($taggedServices as $id => $tags) {
            $references[] = new Reference($id);
        }

        $definition->setArgument(1, $references);
    }
}