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

use JMS\Serializer\SerializerInterface;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResourceModelTransformer;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResponseModelTransformer;

/**
 * Transformer Factory.
 */
class TransformerFactory
{
    /**
     * @param SerializerInterface|null $serializer
     *
     * @return ResourceModelTransformer
     */
    public static function createResourceModelTransformer(SerializerInterface $serializer = null)
    {
        $serializer = self::prepareSerializer($serializer);

        return new ResourceModelTransformer($serializer);
    }

    /**
     * @param SerializerInterface|null $serializer
     *
     * @return ResponseModelTransformer
     */
    public static function createResponseModelTransformer(SerializerInterface $serializer = null)
    {
        $serializer = self::prepareSerializer($serializer);

        return new ResponseModelTransformer($serializer);
    }

    /**
     * @param SerializerInterface|null $serializer
     *
     * @return SerializerInterface
     */
    protected static function prepareSerializer(SerializerInterface $serializer = null)
    {
        if ($serializer === null) {
            $serializer = SerializerFactory::create();
        }

        return $serializer;
    }
}
