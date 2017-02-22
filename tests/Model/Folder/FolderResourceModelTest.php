<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Folder;

use Zibios\WrikePhpJmsserializer\Model\Folder\FolderResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Folder Resource Model Test.
 */
class FolderResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = FolderResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'accountId',
        'title',
        'createdDate',
        'updatedDate',
        'briefDescription',
        'description',
        'color',
        'sharedIds',
        'parentIds',
        'childIds',
        'superParentIds',
        'scope',
        'hasAttachments',
        'attachmentCount',
        'permalink',
        'workflowId',
        'metadata',
        'customFields',
        'customColumnIds',
        'project',
    ];
}
