<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Transformer\Response;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Zibios\WrikePhpJmsserializer\Model\Account\AccountResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Account\AccountResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Attachment\AttachmentResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Attachment\AttachmentResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Color\ColorResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Color\ColorResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Comment\CommentResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Comment\CommentResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResponseModel;
use Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResourceModel;
use Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Dependency\DependencyResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Dependency\DependencyResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Folder\FolderResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Folder\FolderResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Id\IdResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Id\IdResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResponseModel;
use Zibios\WrikePhpJmsserializer\Model\ResponseModelInterface;
use Zibios\WrikePhpJmsserializer\Model\Task\TaskResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Task\TaskResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Timelog\TimelogResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Timelog\TimelogResponseModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResourceModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Version\VersionResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Version\VersionResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Workflow\WorkflowResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Workflow\WorkflowResponseModel;
use Zibios\WrikePhpJmsserializer\SerializerFactory;
use Zibios\WrikePhpJmsserializer\Tests\Transformer\ResponseTransformerTestCase;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResponseModelTransformer;
use Zibios\WrikePhpLibrary\Api;
use Zibios\WrikePhpLibrary\Resource\AccountResource;
use Zibios\WrikePhpLibrary\Resource\AttachmentResource;
use Zibios\WrikePhpLibrary\Resource\ColorResource;
use Zibios\WrikePhpLibrary\Resource\CommentResource;
use Zibios\WrikePhpLibrary\Resource\ContactResource;
use Zibios\WrikePhpLibrary\Resource\CustomFieldResource;
use Zibios\WrikePhpLibrary\Resource\DependencyResource;
use Zibios\WrikePhpLibrary\Resource\FolderResource;
use Zibios\WrikePhpLibrary\Resource\GroupResource;
use Zibios\WrikePhpLibrary\Resource\IdResource;
use Zibios\WrikePhpLibrary\Resource\InvitationResource;
use Zibios\WrikePhpLibrary\Resource\TaskResource;
use Zibios\WrikePhpLibrary\Resource\TimelogResource;
use Zibios\WrikePhpLibrary\Resource\UserResource;
use Zibios\WrikePhpLibrary\Resource\VersionResource;
use Zibios\WrikePhpLibrary\Resource\WorkflowResource;

/**
 * Response Model Transformer Test.
 */
class ResponseModelTransformerTest extends ResponseTransformerTestCase
{
    const VALID_ID = 'valid_id';

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
            [AccountResource::class, AccountResponseModel::class, AccountResourceModel::class],
            [AttachmentResource::class, AttachmentResponseModel::class, AttachmentResourceModel::class],
            [ColorResource::class, ColorResponseModel::class, ColorResourceModel::class],
            [CommentResource::class, CommentResponseModel::class, CommentResourceModel::class],
            [ContactResource::class, ContactResponseModel::class, ContactResourceModel::class],
            [CustomFieldResource::class, CustomFieldResponseModel::class, CustomFieldResourceModel::class],
            [DependencyResource::class, DependencyResponseModel::class, DependencyResourceModel::class],
            [FolderResource::class, FolderResponseModel::class, FolderResourceModel::class],
            [GroupResource::class, GroupResponseModel::class, GroupResourceModel::class],
            [IdResource::class, IdResponseModel::class, IdResourceModel::class],
            [InvitationResource::class, InvitationResponseModel::class, InvitationResourceModel::class],
            [TaskResource::class, TaskResponseModel::class, TaskResourceModel::class],
            [TimelogResource::class, TimelogResponseModel::class, TimelogResourceModel::class],
            [UserResource::class, UserResponseModel::class, UserResourceModel::class],
            [VersionResource::class, VersionResponseModel::class, VersionResourceModel::class],
            [WorkflowResource::class, WorkflowResponseModel::class, WorkflowResourceModel::class],
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

    public function test_testNormalizeInstancesProviderCoverAllMethods()
    {
        $class = new \ReflectionClass(Api::class);
        $expectedMethodNames = $class->getMethods(\ReflectionMethod::IS_PUBLIC);

        $normalizeInstancesProviderArray = $this->normalizeInstancesProvider();
        $coveredMethodNames = [];
        foreach ($normalizeInstancesProviderArray as $normalizeInstancesProviderRow) {
            $coveredClass = $normalizeInstancesProviderRow[0];
            $coveredClassNameArray = explode('\\', $coveredClass);
            $coveredClassName = end($coveredClassNameArray);
            $coveredMethodName = sprintf('get%s', $coveredClassName);
            $coveredMethodNames[$coveredMethodName] = $coveredMethodName;
        }

        $excludedMethods = [
            '__construct',
            'getBearerToken',
            'setBearerToken',
        ];

        foreach ($expectedMethodNames as $expectedMethodName) {
            if (in_array($expectedMethodName->getName(), $excludedMethods, true)) {
                continue;
            }
            self::assertArrayHasKey(
                $expectedMethodName->getName(),
                $coveredMethodNames,
                sprintf('%s not covered by tests', $expectedMethodName->getName())
            );
        }
    }
}
