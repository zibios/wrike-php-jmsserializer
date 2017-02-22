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

use Zibios\WrikePhpJmsserializer\Model\Common\CustomStatusModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Custom Status Model Test.
 */
class CustomStatusModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = CustomStatusModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'name',
        'color',
        'standard',
        'group',
        'hidden',
    ];
}
