<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\Util;

/**
 * Public data of officials
 *
 * @package Reiterus\McxInfoBundle\Util
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface PersonsProviderInterface
{
    public function getList(): array;
}
