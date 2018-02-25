<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Transformer\Response;

use JMS\Serializer\SerializerInterface;
use Zibios\WrikePhpJmsserializer\Model\Account\AccountResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Attachment\AttachmentResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Color\ColorResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Comment\CommentResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResponseModel;
use Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Dependency\DependencyResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Folder\FolderResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Id\IdResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Task\TaskResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Timelog\TimelogResponseModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Version\VersionResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Workflow\WorkflowResponseModel;
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
use Zibios\WrikePhpLibrary\Transformer\Response\Psr\AbstractPsrResponseTransformer as BaseAbstractResponseTransformer;

/**
 * Response Transformer Abstract.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
abstract class AbstractResponseTransformer extends BaseAbstractResponseTransformer
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * AbstractResponseTransformer constructor.
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @return array
     */
    protected function getModelClasses()
    {
        return [
            AccountResource::class => AccountResponseModel::class,
            AttachmentResource::class => AttachmentResponseModel::class,
            ColorResource::class => ColorResponseModel::class,
            CommentResource::class => CommentResponseModel::class,
            ContactResource::class => ContactResponseModel::class,
            CustomFieldResource::class => CustomFieldResponseModel::class,
            DependencyResource::class => DependencyResponseModel::class,
            FolderResource::class => FolderResponseModel::class,
            GroupResource::class => GroupResponseModel::class,
            IdResource::class => IdResponseModel::class,
            InvitationResource::class => InvitationResponseModel::class,
            TaskResource::class => TaskResponseModel::class,
            TimelogResource::class => TimelogResponseModel::class,
            UserResource::class => UserResponseModel::class,
            VersionResource::class => VersionResponseModel::class,
            WorkflowResource::class => WorkflowResponseModel::class,
        ];
    }

    /**
     * @param string $resourceClass
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    protected function getModelClassForResource($resourceClass)
    {
        if (false === array_key_exists($resourceClass, $this->getModelClasses())) {
            throw new \InvalidArgumentException(sprintf('"%s" class not supported', $resourceClass));
        }

        return $this->getModelClasses()[$resourceClass];
    }
}
