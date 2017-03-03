<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Color;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Color Resource Model.
 */
class ColorResourceModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * Color name.
     *
     * @SA\Type("string")
     * @SA\SerializedName("name")
     *
     * @var string|null
     */
    protected $name;

    /**
     * HEX code.
     *
     * @SA\Type("string")
     * @SA\SerializedName("hex")
     *
     * @var string|null
     */
    protected $hex;

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
    public function getHex()
    {
        return $this->hex;
    }

    /**
     * @param null|string $hex
     *
     * @return $this
     */
    public function setHex($hex)
    {
        $this->hex = $hex;

        return $this;
    }
}
