<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Transformer;

use JMS\Serializer\SerializerInterface;
use Zibios\WrikePhpJmsserializer\Model\Contact\ContactResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Group\GroupResponseModel;
use Zibios\WrikePhpJmsserializer\Model\Invitation\InvitationResponseModel;
use Zibios\WrikePhpJmsserializer\Model\User\UserResponseModel;
use Zibios\WrikePhpLibrary\Resource\ContactResource;
use Zibios\WrikePhpLibrary\Resource\GroupResource;
use Zibios\WrikePhpLibrary\Resource\InvitationResource;
use Zibios\WrikePhpLibrary\Resource\UserResource;
use Zibios\WrikePhpLibrary\Transformer\AbstractResponseTransformer as BaseAbstractResponseTransformer;

/**
 * Response Transformer Abstract.
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
            ContactResource::class => ContactResponseModel::class,
            UserResource::class => UserResponseModel::class,
            GroupResource::class => GroupResponseModel::class,
            InvitationResource::class => InvitationResponseModel::class,
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
        if (array_key_exists($resourceClass, $this->getModelClasses()) === false) {
            throw new \InvalidArgumentException(sprintf('"%s" class not supported', $resourceClass));
        }

        return $this->getModelClasses()[$resourceClass];
    }
}
