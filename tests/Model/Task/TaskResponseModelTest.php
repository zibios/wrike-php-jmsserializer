<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Task;

use Zibios\WrikePhpJmsserializer\Model\Task\TaskResponseModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResponseModelTestCase;

/**
 * Task Response Model Test.
 */
class TaskResponseModelTest extends ResponseModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = TaskResponseModel::class;
}
