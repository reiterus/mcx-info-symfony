<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\Tests\DependencyInjection;

use Reiterus\McxInfoBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * @covers \Reiterus\McxInfoBundle\DependencyInjection\Configuration
 * Class ConfigurationTest
 *
 * @package Reiterus\McxInfoBundle\Tests\DependencyInjection
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class ConfigurationTest extends TestCase
{
    /**
     * @covers \Reiterus\McxInfoBundle\DependencyInjection\Configuration::getConfigTreeBuilder
     * @return void
     */
    public function testGetConfigTreeBuilder()
    {
        $object = new Configuration();
        $actual = $object->getConfigTreeBuilder();
        $this->assertInstanceOf(TreeBuilder::class, $actual);
    }
}
