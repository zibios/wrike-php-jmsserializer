<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Account;

use Zibios\WrikePhpJmsserializer\Model\Account\AccountResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Account Resource Model Test.
 */
class AccountResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = AccountResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'name',
        'dateFormat',
        'firstDayOfWeek',
        'workDays',
        'rootFolderId',
        'recycleBinId',
        'createdDate',
        'subscription',
        'metadata',
        'customFields',
        'joinedDate',
    ];
}
