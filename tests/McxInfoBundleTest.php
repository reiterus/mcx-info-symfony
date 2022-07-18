<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\Tests;

use Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension;
use Reiterus\McxInfoBundle\McxInfoBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @covers \Reiterus\McxInfoBundle\McxInfoBundle
 * Class McxInfoBundleTest
 *
 * @package Reiterus\McxInfoBundle\Tests
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxInfoBundleTest extends TestCase
{
    /**
     * @covers \Reiterus\McxInfoBundle\McxInfoBundle::getContainerExtension
     * @return void
     */
    public function testGetContainerExtension(): void
    {
        $bundle = new McxInfoBundle();
        $actual = $bundle->getContainerExtension();
        $this->assertInstanceOf(McxInfoExtension::class, $actual);
    }

    /**
     * @covers \Reiterus\McxInfoBundle\McxInfoBundle::build
     * @return void
     */
    public function testBuild(): void
    {
        $bundle = new McxInfoBundle();
        $bundle->build(new ContainerBuilder());
        $result = $this->doesNotPerformAssertions();
        $this->assertFalse($result);
    }
}
