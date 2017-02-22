<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Timelog;

use Zibios\WrikePhpJmsserializer\Model\Timelog\TimelogResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Timelog Resource Model Test.
 */
class TimelogResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = TimelogResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'taskId',
        'userId',
        'hours',
        'createdDate',
        'trackedDate',
        'comment',
    ];
}
