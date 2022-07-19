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

use Exception;
use Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @covers \Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension
 * Class McxInfoExtensionTest
 *
 * @package Reiterus\McxInfoBundle\Tests\DependencyInjection
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxInfoExtensionTest extends TestCase
{
    private McxInfoExtension $object;

    /**
     * @covers \Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension::load
     * @return void
     * @throws Exception
     */
    public function testLoad()
    {
        $container = new ContainerBuilder();
        $this->object->load([], $container);
        $result = $this->doesNotPerformAssertions();
        $this->assertFalse($result);
    }

    /**
     * @covers \Reiterus\McxInfoBundle\DependencyInjection\McxInfoExtension::getAlias
     * @return void
     */
    public function testGetAlias()
    {
        $this->assertIsString($this->object->getAlias());
    }

    /**
     * @codeCoverageIgnore
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = new McxInfoExtension();
    }
}
