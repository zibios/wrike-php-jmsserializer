<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Id;

use Zibios\WrikePhpJmsserializer\Model\Id\IdResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Id Resource Model Test.
 */
class IdResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = IdResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'apiV2Id',
    ];
}
