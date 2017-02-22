<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Id;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Id Resource Model.
 */
class IdResourceModel implements ResourceModelInterface
{
    /**
     * API v3 ID.
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * API v2 legacy ID.
     *
     * @SA\Type("string")
     * @SA\SerializedName("apiV2Id")
     *
     * @var string|null
     */
    protected $apiV2Id;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null|string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getApiV2Id()
    {
        return $this->apiV2Id;
    }

    /**
     * @param null|string $apiV2Id
     *
     * @return $this
     */
    public function setApiV2Id($apiV2Id)
    {
        $this->apiV2Id = $apiV2Id;

        return $this;
    }
}
