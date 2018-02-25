<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * Serializer Factory.
 */
class SerializerFactory
{
    /**
     * @return SerializerInterface
     */
    public static function create()
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
