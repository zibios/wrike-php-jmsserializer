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

use Zibios\WrikePhpJmsserializer\Model\Common\SubscriptionModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Subscription Model Test.
 */
class SubscriptionModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = SubscriptionModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'type',
        'paid',
        'userLimit',
    ];
}
