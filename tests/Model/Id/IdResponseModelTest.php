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

use Zibios\WrikePhpJmsserializer\Model\Id\IdResponseModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResponseModelTestCase;

/**
 * Id Response Model Test.
 */
class IdResponseModelTest extends ResponseModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = IdResponseModel::class;
}
