<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\Tests\Controller;

use Reiterus\McxInfoBundle\Controller\McxInfoController;
use PHPUnit\Framework\TestCase;
use Reiterus\McxInfoBundle\Util\MainDataInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @covers \Reiterus\McxInfoBundle\Controller\McxInfoController
 * Class McxInfoControllerTest
 *
 * @package Reiterus\McxInfoBundle\Tests\Controller
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxInfoControllerTest extends TestCase
{
    /**
     * @covers       \Reiterus\McxInfoBundle\Controller\McxInfoController::index
     * @dataProvider prettyProvider
     * @param bool $pretty
     * @return void
     */
    public function testIndex(bool $pretty): void
    {
        $main  = $this->createMock(MainDataInterface::class);

        $item = new class {
            public function getList(): array
            {
                return [];
            }
        };

        $persons = [$item];

        $controller = new McxInfoController($main, $persons, [], $pretty);
        $actual = $controller->index();

        $this->assertInstanceOf(JsonResponse::class, $actual);
    }

    /**
     * @codeCoverageIgnore
     * @return array
     */
    public function prettyProvider(): array
    {
        return [
            [true],
            [false],
        ];
    }
}
