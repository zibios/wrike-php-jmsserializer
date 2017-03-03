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
 * Custom Status Model.
 */
class CustomStatusModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * Custom status ID.
     *
     * Comment: Custom status ID
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
     * Color name.
     * Custom status color, Enum.
     *
     * @see \Zibios\WrikePhpLibrary\Enum\ColorEnum
     *
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("color")
     *
     * @var string|null
     */
    protected $color;

    /**
     * Defines default custom status (ignored in requests).
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("standard")
     *
     * @var bool|null
     */
    protected $standard;

    /**
     * Custom status group.
     *
     * Task Status, Enum: Active, Completed, Deferred, Cancelled
     *
     * @SA\Type("string")
     * @SA\SerializedName("group")
     *
     * @var string|null
     */
    protected $group;

    /**
     * Custom status is hidden.
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("hidden")
     *
     * @var bool|null
     */
    protected $hidden;

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
     * @return null|string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param null|string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

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
     * @return null|string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param null|string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;

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
}
