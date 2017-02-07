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
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResponseModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResourceModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResponseModel;
use Zibios\WrikePhpJmsserializer\Model\ResponseModelInterface;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResponseModelTransformer;
use Zibios\WrikePhpJmsserializer\SerializerFactory;
use Zibios\WrikePhpJmsserializer\Tests\Transformer\ResponseTransformerTestCase;
use Zibios\WrikePhpLibrary\Resource\ContactResource;
use Zibios\WrikePhpLibrary\Resource\GroupResource;
use Zibios\WrikePhpLibrary\Resource\InvitationResource;
use Zibios\WrikePhpLibrary\Resource\UserResource;

/**
 * Response Model Transformer Test
 */
class ResponseModelTransformerTest extends ResponseTransformerTestCase
{
    const VALID_ID = 'valid_id';

    /**
     *
     */
    public function setUp()
    {
        $serializer = SerializerFactory::createSerializer();
        $this->object = new ResponseModelTransformer($serializer);
    }


    /**
     * @return array
     */
    public function normalizeInstancesProvider()
    {
        return [
            // [resourceClass, responseModelClass, resourceModelClass]
            [ContactResource::class, ContactResponseModel::class, ContactResourceModel::class],
            [UserResource::class, UserResponseModel::class, UserResourceModel::class],
            [GroupResource::class, GroupResponseModel::class, GroupResourceModel::class],
            [InvitationResource::class, InvitationResponseModel::class, InvitationResourceModel::class],
        ];
    }

    /**
     * @param mixed $resourceClass
     * @param mixed $responseModelClass
     * @param mixed $resourceModelClass
     *
     * @dataProvider normalizeInstancesProvider
     */
    public function test_normalize($resourceClass, $responseModelClass, $resourceModelClass)
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
        /** @var ResponseModelInterface $returnedResponse */
        $returnedResponse = $this->object->transform($responseMock, $resourceClass);

        self::assertInstanceOf($responseModelClass, $returnedResponse);

        foreach ($returnedResponse->getData() as $resourceModel) {
            self::assertInstanceOf($resourceModelClass, $resourceModel);
        }
    }
}
