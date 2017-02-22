<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Dependency;

use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Dependency Resource Model.
 */
class DependencyResourceModel implements ResourceModelInterface
{
    /**
     * Dependency ID.
     *
     * Dependency: Dependency ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * Predecessor task ID.
     *
     * Dependency: Task ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("predecessorId")
     *
     * @var string|null
     */
    protected $predecessorId;

    /**
     * Successor task ID.
     *
     * Dependency: Task ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("successorId")
     *
     * @var string|null
     */
    protected $successorId;

    /**
     * Relation between Predecessor and Successor.
     *
     * Dependency relation type, Enum: StartToStart, StartToFinish, FinishToStart, FinishToFinish
     *
     * @see \Zibios\WrikePhpLibrary\Enum\DependencyRelationTypeEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("relationType")
     *
     * @var string|null
     */
    protected $relationType;

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
    public function getPredecessorId()
    {
        return $this->predecessorId;
    }

    /**
     * @param null|string $predecessorId
     *
     * @return $this
     */
    public function setPredecessorId($predecessorId)
    {
        $this->predecessorId = $predecessorId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSuccessorId()
    {
        return $this->successorId;
    }

    /**
     * @param null|string $successorId
     *
     * @return $this
     */
    public function setSuccessorId($successorId)
    {
        $this->successorId = $successorId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * @param null|string $relationType
     *
     * @return $this
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;

        return $this;
    }
}
