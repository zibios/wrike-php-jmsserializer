<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Comment;

use Zibios\WrikePhpJmsserializer\Model\Comment\CommentResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Comment Resource Model Test.
 */
class CommentResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = CommentResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'authorId',
        'text',
        'createdDate',
        'updatedDate',
        'taskId',
        'folderId',
    ];
}
