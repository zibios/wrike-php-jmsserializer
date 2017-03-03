<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model;

/**
 * Model Interface.
 */
interface ModelInterface
{
    /**
     * @return array
     */
    public function toArray();

    /**
     * @return string
     */
    public function toJson();
}
