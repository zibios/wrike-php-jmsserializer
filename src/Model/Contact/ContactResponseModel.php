<?php
/**
 * This file is part of the WrikePhpJmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Contact;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\ResponseModelInterface;
use Zibios\WrikePhpLibrary\Model\Contact\ContactResponseModel as BaseContactResponseModel;

/**
 * Contact Response Model
 */
class ContactResponseModel extends BaseContactResponseModel implements ResponseModelInterface
{
    /**
     * Kind of response
     *
     * @SA\Type("string")
     * @SA\SerializedName("kind")
     * @var string|null
     */
    protected $kind;

    /**
     * Collection of response models
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Contact\ContactResourceModel>")
     * @SA\SerializedName("data")
     * @var array|ContactResourceModel]|null
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
     * @return array|ContactResourceModel[]|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|ContactResourceModel[]|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
