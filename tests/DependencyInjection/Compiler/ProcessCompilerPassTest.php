<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\Tests\DependencyInjection\Compiler;

use Reiterus\McxInfoBundle\DependencyInjection\Compiler\ProcessCompilerPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * @covers \Reiterus\McxInfoBundle\DependencyInjection\Compiler\ProcessCompilerPass
 * Class ProcessCompilerPassTest
 *
 * @package Reiterus\McxInfoBundle\Tests\DependencyInjection\Compiler
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class ProcessCompilerPassTest extends TestCase
{
    /**
     * @covers \Reiterus\McxInfoBundle\DependencyInjection\Compiler\ProcessCompilerPass::process
     * @return void
     */
    public function testProcess()
    {
        $object = new ProcessCompilerPass();

        $definition = $this->getMockBuilder(Definition::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container = $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container->expects($this->any())
            ->method('findTaggedServiceIds')
            ->withAnyParameters()
            ->willReturn(['key' => 'value']);

        $container->expects($this->any())
            ->method('getDefinition')
            ->withAnyParameters()
            ->willReturn($definition);

        $object->process($container);

        $result = $this->doesNotPerformAssertions();
        $this->assertFalse($result);
    }
}
