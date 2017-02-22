<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Color;

use Zibios\WrikePhpJmsserializer\Model\Color\ColorResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Color Resource Model Test.
 */
class ColorResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = ColorResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'name',
        'hex',
    ];
}
