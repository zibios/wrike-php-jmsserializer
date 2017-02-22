<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Common;

use Zibios\WrikePhpJmsserializer\Model\Common\TaskDatesModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Task Dates Model Test.
 */
class TaskDatesModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = TaskDatesModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'type',
        'duration',
        'start',
        'due',
        'workOnWeekends',
    ];
}
