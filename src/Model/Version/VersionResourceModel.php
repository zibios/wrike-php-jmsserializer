<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Version;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Version Resource Model.
 */
class VersionResourceModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * Major version number.
     *
     * @SA\Type("integer")
     * @SA\SerializedName("major")
     *
     * @var int|null
     */
    protected $major;

    /**
     * Minor version number.
     *
     * @SA\Type("integer")
     * @SA\SerializedName("minor")
     *
     * @var int|null
     */
    protected $minor;

    /**
     * @return int|null
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * @param int|null $major
     *
     * @return $this
     */
    public function setMajor($major)
    {
        $this->major = $major;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * @param int|null $minor
     *
     * @return $this
     */
    public function setMinor($minor)
    {
        $this->minor = $minor;

        return $this;
    }
}
