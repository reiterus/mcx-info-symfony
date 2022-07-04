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
class MainData implements MainDataInterface
{
    /**
     * Ministry name
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Министерство сельского хозяйства Российской Федерации';
    }

    /**
     * Ministry description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'Федеральный орган исполнительной власти, обеспечивающий проведение единой агропромышленной политики';
    }

    /**
     * Ministry address
     *
     * @return string
     */
    public function getAddress(): string
    {
        return '107996, Москва, Орликов переулок, 1/11';
    }

    /**
     * Ministry website
     * @return string
     */
    public function getSite(): string
    {
        return 'https://mcx.gov.ru';
    }
}
