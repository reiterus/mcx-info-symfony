<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension;
use Reiterus\McxInfoBundle\DependencyInjection\Compiler\ProcessCompilerPass;

/**
 * Bundle class
 *
 * @package Reiterus\McxInfoBundle
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxInfoBundle extends Bundle
{
    /**
     * Redefining pass registration
     *
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ProcessCompilerPass());
    }

    /**
     * Get the package container extension
     *
     * @return McxInfoExtension
     */
    public function getContainerExtension(): McxInfoExtension
    {
        if (null === $this->extension) {
            $this->extension = new McxInfoExtension();
        }

        return $this->extension;
    }
}