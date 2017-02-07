<?php
/**
 * This file is part of the WrikePhpJmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Common;

use Zibios\WrikePhpJmsserializer\Model\Common\UserProfileModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResourceModelTestCase;

/**
 * User Profile Model Test
 */
class UserProfileModelTest extends ResourceModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = UserProfileModel::class;

    /**
     * @var array
     */
    protected $properties = [
        'accountId',
        'email',
        'role',
        'external',
        'admin',
        'owner',
    ];
}
