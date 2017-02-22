<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Dependency;

use Zibios\WrikePhpJmsserializer\Model\Dependency\DependencyResourceModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * Dependency Resource Model Test.
 */
class DependencyResourceModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = DependencyResourceModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'predecessorId',
        'successorId',
        'relationType',
    ];
}
