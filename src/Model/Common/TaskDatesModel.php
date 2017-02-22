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
 * Task Dates Model.
 */
class TaskDatesModel implements ResourceModelInterface
{
    /**
     * Type.
     *
     * Task Dates, Enum: Backlog, Milestone, Planned
     *
     * @see \Zibios\WrikePhpLibrary\Enum\TaskDatesTypeEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("type")
     *
     * @var string|null
     */
    protected $type;

    /**
     * Duration in minutes. Duration is present in Planned tasks and is optional for Backlog tasks.
     *
     * @SA\Type("integer")
     * @SA\SerializedName("duration")
     *
     * @var int|null
     */
    protected $duration;

    /**
     * Start date is present only in Planned tasks.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss ('T'HH:mm:ss is optional)
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("start")
     *
     * @var \DateTime|null
     */
    protected $start;

    /**
     * Due date is present only in Planned and Milestone tasks.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss ('T'HH:mm:ss is optional)
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("due")
     *
     * @var \DateTime|null
     */
    protected $due;

    /**
     * Weekends are included in task scheduling.
     *
     * Comment: Optional
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("workOnWeekends")
     *
     * @var bool|null
     */
    protected $workOnWeekends;

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
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param \DateTime|null $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * @param \DateTime|null $due
     *
     * @return $this
     */
    public function setDue($due)
    {
        $this->due = $due;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWorkOnWeekends()
    {
        return $this->workOnWeekends;
    }

    /**
     * @param bool|null $workOnWeekends
     *
     * @return $this
     */
    public function setWorkOnWeekends($workOnWeekends)
    {
        $this->workOnWeekends = $workOnWeekends;

        return $this;
    }
}
