<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Common;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Subscription Model.
 */
class SubscriptionModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * Subscription type.
     *
     * Enum: Free, Premium, Business, CreativeBusiness, Enterprise, CreativeEnterprise
     *
     * @see \Zibios\WrikePhpLibrary\Enum\SubscriptionTypeEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("type")
     *
     * @var string|null
     */
    protected $type;

    /**
     * Subscription is paid (available only to account admins).
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("paid")
     *
     * @var bool|null
     */
    protected $paid;

    /**
     * Limit of subscription users (available only to account admins).
     *
     * @SA\Type("integer")
     * @SA\SerializedName("userLimit")
     *
     * @var int|null
     */
    protected $userLimit;

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param bool|null $paid
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserLimit()
    {
        return $this->userLimit;
    }

    /**
     * @param int|null $userLimit
     *
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;

        return $this;
    }
}
