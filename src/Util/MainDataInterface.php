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
 * Ministry main data
 *
 * @package Reiterus\McxInfoBundle\Util
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface MainDataInterface
{
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string;

    /**
     * Get site
     *
     * @return string
     */
    public function getSite(): string;
}
