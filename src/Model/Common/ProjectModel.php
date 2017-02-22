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
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Project Model.
 */
class ProjectModel implements ResourceModelInterface
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
     * @SA\Type("DateTime<'Y-m-d'>")
     * @SA\SerializedName("startDate")
     *
     * @var \DateTime|null
     */
    protected $startDate;

    /**
     * Project end date.
     *
     * Format: yyyy-MM-dd
     * Comment: Optional
     *
     * @SA\Type("DateTime<'Y-m-d'>")
     * @SA\SerializedName("endDate")
     *
     * @var \DateTime|null
     */
    protected $endDate;

    /**
     * Project created date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     * Comment: Optional
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("createdDate")
     *
     * @var \DateTime|null
     */
    protected $createdDate;

    /**
     * Project completed date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     * Comment: Optional
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("completedDate")
     *
     * @var \DateTime|null
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
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime|null $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime|null $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime|null $createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }

    /**
     * @param \DateTime|null $completedDate
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->completedDate = $completedDate;

        return $this;
    }
}
