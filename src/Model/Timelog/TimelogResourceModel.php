<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Timelog;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Timelog Resource Model.
 */
class TimelogResourceModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * Timelog Entry ID.
     *
     * Timelog: Timelog Entry ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * Task to which timelog record is tracked.
     *
     * Timelog: Task ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("taskId")
     *
     * @var string|null
     */
    protected $taskId;

    /**
     * User who tracked the timelog record.
     *
     * Timelog: Contact ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("userId")
     *
     * @var string|null
     */
    protected $userId;

    /**
     * Hours tracked in timelog record, must be in [0..24] hours range.
     *
     * @SA\Type("float")
     * @SA\SerializedName("hours")
     *
     * @var float|null
     */
    protected $hours;

    /**
     * Date of timelog was created in user's timezone.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("string")
     * @SA\SerializedName("createdDate")
     *
     * @var string|null
     */
    protected $createdDate;

    /**
     * Date for which timelog was recorded.
     *
     * Format: yyyy-MM-dd
     *
     * @SA\Type("string")
     * @SA\SerializedName("trackedDate")
     *
     * @var string|null
     */
    protected $trackedDate;

    /**
     * Timelog record comment.
     *
     * @SA\Type("string")
     * @SA\SerializedName("comment")
     *
     * @var string|null
     */
    protected $comment;

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
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param null|string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param null|string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param float|null $hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

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
    public function getTrackedDate()
    {
        return $this->trackedDate;
    }

    /**
     * @param string|null $trackedDate
     *
     * @return $this
     */
    public function setTrackedDate($trackedDate)
    {
        $this->trackedDate = $trackedDate;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param null|string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
}
