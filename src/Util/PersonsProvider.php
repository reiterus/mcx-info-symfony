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
class PersonsProvider implements PersonsProviderInterface
{
    /**
     * List of officials
     *
     * @return array
     */
    public function getList(): array
    {
        return [
            [
                'Патрушев Дмитрий Николаевич',
                'Министр сельского хозяйства Российской Федерации',
                'info@mcx.gov.ru',
                'Тел.: +7 (495) 607-80-00',
                'Факс: +7 (495) 607-83-62',
            ],
        ];
    }
}
