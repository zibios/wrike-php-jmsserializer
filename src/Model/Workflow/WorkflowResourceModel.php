<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Workflow;

use Zibios\WrikePhpJmsserializer\Model\Common\CustomStatusModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Workflow Resource Model.
 */
class WorkflowResourceModel implements ResourceModelInterface
{
    /**
     * Workflow ID.
     *
     * Comment: Workflow ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * Name (128 symbols max).
     *
     * @SA\Type("string")
     * @SA\SerializedName("name")
     *
     * @var string|null
     */
    protected $name;

    /**
     * Defines default workflow.
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("standard")
     *
     * @var bool|null
     */
    protected $standard;

    /**
     * Workflow is hidden.
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("hidden")
     *
     * @var bool|null
     */
    protected $hidden;

    /**
     * Custom statuses.
     *
     * ID and group cannot be set simultaneously in request parameter,
     * but ID is required for update, and group is required for insert
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Common\CustomStatusModel>")
     * @SA\SerializedName("customStatuses")
     *
     * @var array|CustomStatusModel[]|null
     */
    protected $customStatuses;

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
     * @return WorkflowResourceModel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * @param bool|null $standard
     *
     * @return $this
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @param bool|null $hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * @return array|null|CustomStatusModel[]
     */
    public function getCustomStatuses()
    {
        return $this->customStatuses;
    }

    /**
     * @param array|null|CustomStatusModel[] $customStatuses
     *
     * @return $this
     */
    public function setCustomStatuses($customStatuses)
    {
        $this->customStatuses = $customStatuses;

        return $this;
    }
}
