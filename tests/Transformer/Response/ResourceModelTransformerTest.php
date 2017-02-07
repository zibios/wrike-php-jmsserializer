<?php
/**
 * This file is part of the WrikePhpJmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Transformer\Response;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResourceModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResourceModel;
use Zibios\WrikePhpJmsserializer\SerializerFactory;
use Zibios\WrikePhpJmsserializer\Tests\Transformer\ResponseTransformerTestCase;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResourceModelTransformer;
use Zibios\WrikePhpLibrary\Resource\ContactResource;
use Zibios\WrikePhpLibrary\Resource\GroupResource;
use Zibios\WrikePhpLibrary\Resource\InvitationResource;
use Zibios\WrikePhpLibrary\Resource\UserResource;

/**
 * Resource Model Transformer Test
 */
class ResourceModelTransformerTest extends ResponseTransformerTestCase
{
    const VALID_ID = 'valid_id';

    /**
     *
     */
    public function setUp()
    {
        $serializer = SerializerFactory::createSerializer();
        $this->object = new ResourceModelTransformer($serializer);
    }


    /**
     * @return array
     */
    public function normalizeInstancesProvider()
    {
        return [
            // [resourceClass, resourceModelClass]
            [ContactResource::class, ContactResourceModel::class],
            [UserResource::class, UserResourceModel::class],
            [GroupResource::class, GroupResourceModel::class],
            [InvitationResource::class, InvitationResourceModel::class],
        ];
    }

    /**
     *
     * @dataProvider normalizeInstancesProvider
     *
     * @param mixed $resourceClass
     * @param mixed $resourceModelClass
     */
    public function test_normalize($resourceClass, $resourceModelClass)
    {
        $responseString = sprintf('{"data":[{"id":"%s"}]}', self::VALID_ID);

        $bodyMock = $this->getMockForAbstractClass(StreamInterface::class);
        $bodyMock->expects(self::any())
            ->method('getContents')
            ->willReturn($responseString);
        $responseMock = $this->getMockForAbstractClass(ResponseInterface::class);
        $responseMock->expects(self::any())
            ->method('getBody')
            ->willReturn($bodyMock);
        /** @var array $returnedResponse */
        $returnedResponse = $this->object->transform($responseMock, $resourceClass);

        self::assertInternalType('array', $returnedResponse);

        foreach ($returnedResponse as $resourceModel) {
            self::assertInstanceOf($resourceModelClass, $resourceModel);
        }
    }
}