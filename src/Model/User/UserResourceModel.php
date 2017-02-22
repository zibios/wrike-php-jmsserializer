<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\User;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResourceModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * User Resource Model.
 */
class UserResourceModel extends ContactResourceModel implements ResourceModelInterface
{
}
