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
use Zibios\WrikePhpJmsserializer\Model\Attachment\AttachmentResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Color\ColorResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Comment\CommentResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResourceModel;
use Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Dependency\DependencyResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Folder\FolderResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Id\IdResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Task\TaskResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Timelog\TimelogResourceModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Version\VersionResourceModel;
use Zibios\WrikePhpJmsserializer\Model\Workflow\WorkflowResourceModel;
use Zibios\WrikePhpJmsserializer\SerializerFactory;
use Zibios\WrikePhpJmsserializer\Transformer\Response\ResourceModelTransformer;
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
 * Resource Model Transformer Test.
 */
class ResourceModelTransformerTest extends ResponseTransformerTestCase
{
    const VALID_ID = 'valid_id';

    public function setUp()
    {
        $serializer = SerializerFactory::create();
        $this->object = new ResourceModelTransformer($serializer);
    }

    /**
     * @return array
     */
    public function normalizeInstancesProvider()
    {
        return [
            // [resourceClass, resourceModelClass]
            [AccountResource::class, AccountResourceModel::class],
            [AttachmentResource::class, AttachmentResourceModel::class],
            [ColorResource::class, ColorResourceModel::class],
            [CommentResource::class, CommentResourceModel::class],
            [ContactResource::class, ContactResourceModel::class],
            [CustomFieldResource::class, CustomFieldResourceModel::class],
            [DependencyResource::class, DependencyResourceModel::class],
            [FolderResource::class, FolderResourceModel::class],
            [GroupResource::class, GroupResourceModel::class],
            [IdResource::class, IdResourceModel::class],
            [InvitationResource::class, InvitationResourceModel::class],
            [TaskResource::class, TaskResourceModel::class],
            [TimelogResource::class, TimelogResourceModel::class],
            [UserResource::class, UserResourceModel::class],
            [VersionResource::class, VersionResourceModel::class],
            [WorkflowResource::class, WorkflowResourceModel::class],
        ];
    }

    /**
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
            'recreateForNewAccessToken',
            'recreateForNewApiExceptionTransformer',
            'recreateForNewResponseTransformer',
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
