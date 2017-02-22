<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\CustomField;

use Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * CustomField Resource Model Test.
 */
class CustomFieldResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = CustomFieldResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'accountId',
        'title',
        'type',
        'sharedIds',
        'deleted',
    ];
}
