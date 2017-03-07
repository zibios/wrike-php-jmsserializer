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
 * Project Model.
 */
class ProjectModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * ID of user who created project.
     *
     * Comment: Contact ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("authorId")
     *
     * @var string|null
     */
    protected $authorId;

    /**
     * List of project owner IDs.
     *
     * Comment: Contact ID list
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("ownerIds")
     *
     * @var array|string[]|null
     */
    protected $ownerIds;

    /**
     * Project status.
     *
     * Enum: Green, Yellow, Red, Completed, OnHold, Cancelled
     *
     * @see \Zibios\WrikePhpLibrary\Enum\ProjectStatusEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("status")
     *
     * @var string|null
     */
    protected $status;

    /**
     * Project start date.
     *
     * Format: yyyy-MM-dd
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("startDate")
     *
     * @var string|null
     */
    protected $startDate;

    /**
     * Project end date.
     *
     * Format: yyyy-MM-dd
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("endDate")
     *
     * @var string|null
     */
    protected $endDate;

    /**
     * Project created date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("createdDate")
     *
     * @var string|null
     */
    protected $createdDate;

    /**
     * Project completed date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("completedDate")
     *
     * @var string|null
     */
    protected $completedDate;

    /**
     * @return null|string
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param null|string $authorId
     *
     * @return $this
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getOwnerIds()
    {
        return $this->ownerIds;
    }

    /**
     * @param array|null|\string[] $ownerIds
     *
     * @return $this
     */
    public function setOwnerIds($ownerIds)
    {
        $this->ownerIds = $ownerIds;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string|null $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string|null $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param string|null $createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }

    /**
     * @param string|null $completedDate
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->completedDate = $completedDate;

        return $this;
    }
}
