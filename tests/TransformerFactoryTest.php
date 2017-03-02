<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests;

use Zibios\WrikePhpJmsserializer\SerializerFactory;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResourceModelTransformer;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResponseModelTransformer;
use Zibios\WrikePhpJmsserializer\TransformerFactory;
use Zibios\WrikePhpLibrary\Transformer\ResponseTransformerInterface;

/**
 * Transformer Factory Test.
 */
class TransformerFactoryTest extends TestCase
{
    public function test_createResourceModelTransformer()
    {
        $transformer = TransformerFactory::createResourceModelTransformer();
        self::assertInstanceOf(ResponseTransformerInterface::class, $transformer);
        self::assertInstanceOf(ResourceModelTransformer::class, $transformer);

        $serializer = SerializerFactory::create();
        $transformer = TransformerFactory::createResourceModelTransformer($serializer);
        self::assertInstanceOf(ResponseTransformerInterface::class, $transformer);
        self::assertInstanceOf(ResourceModelTransformer::class, $transformer);
    }

    public function test_createResponseModelTransformer()
    {
        $transformer = TransformerFactory::createResponseModelTransformer();
        self::assertInstanceOf(ResponseTransformerInterface::class, $transformer);
        self::assertInstanceOf(ResponseModelTransformer::class, $transformer);

        $serializer = SerializerFactory::create();
        $transformer = TransformerFactory::createResponseModelTransformer($serializer);
        self::assertInstanceOf(ResponseTransformerInterface::class, $transformer);
        self::assertInstanceOf(ResponseModelTransformer::class, $transformer);
    }
}
