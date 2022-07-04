<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Util;

use Reiterus\McxInfoBundle\Util\PersonsProviderInterface;

/**
 * Adding Ministry Officials
 *
 * @package App\Util
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxPersons implements PersonsProviderInterface
{
    /**
     * Get a list of ministers
     *
     * @return array
     */
    public function getList(): array
    {
        return [
            [
                'Лут Оксана Николаевна',
                'Первый заместитель Министра',
                'Тел.: +7 (495) 607-61-60',
            ],
            [
                'Лебедев Иван Вячеславович',
                'Статс-секретарь - заместитель Министра',
                'pr.lebedeva@mcx.gov.ru',
                'Тел.: +7 (499) 975-45-82',
                'Факс: +7 (499) 975-53-35',
            ],
            [
                'Левин Сергей Львович',
                'Заместитель Министра',
                'pr.levina@mcx.gov.ru',
                'Тел.: +7 (499) 975-39-58',
                'Факс: +7 (495) 607-61-75',
            ],
            [
                'Увайдов Максим Иосифович',
                'Заместитель Министра',
                'pr.uvaidova@mcx.gov.ru',
                'Тел.: +7 (499) 975-16-63',
            ],
        ];
    }
}