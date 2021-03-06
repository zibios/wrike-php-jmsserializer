<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Folder;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ResponseModelInterface;

/**
 * Folder Response Model.
 */
class FolderResponseModel extends AbstractModel implements ResponseModelInterface
{
    /**
     * Kind of response.
     *
     * @SA\Type("string")
     * @SA\SerializedName("kind")
     *
     * @var string|null
     */
    protected $kind;

    /**
     * Collection of response models.
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Folder\FolderResourceModel>")
     * @SA\SerializedName("data")
     *
     * @var array|FolderResourceModel]|null
     */
    protected $data;

    /**
     * @return null|string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param null|string $kind
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return array|FolderResourceModel[]|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|FolderResourceModel[]|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
