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

use Zibios\WrikePhpJmsserializer\Model\Task\TaskResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Task Resource Model Test.
 */
class TaskResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = TaskResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'accountId',
        'title',
        'description',
        'briefDescription',
        'parentIds',
        'superParentIds',
        'sharedIds',
        'responsibleIds',
        'status',
        'importance',
        'createdDate',
        'updatedDate',
        'completedDate',
        'dates',
        'scope',
        'authorIds',
        'customStatusId',
        'hasAttachments',
        'attachmentCount',
        'permalink',
        'priority',
        'followedByMe',
        'followerIds',
        'recurrent',
        'superTaskIds',
        'subTaskIds',
        'dependencyIds',
        'metadata',
        'customFields',
    ];
}
