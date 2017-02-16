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

use Zibios\WrikePhpJmsserializer\Model\Common\MetadataModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Metadata Model Test.
 */
class MetadataModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = MetadataModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'key',
        'value',
    ];
}
