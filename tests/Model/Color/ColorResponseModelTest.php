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

use Zibios\WrikePhpJmsserializer\Model\Color\ColorResponseModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResponseModelTestCase;

/**
 * Color Response Model Test.
 */
class ColorResponseModelTest extends ResponseModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = ColorResponseModel::class;
}
