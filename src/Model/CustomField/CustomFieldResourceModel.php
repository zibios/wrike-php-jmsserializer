<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\CustomField;

use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Custom Field Resource Model.
 */
class CustomFieldResourceModel implements ResourceModelInterface
{
    /**
     * Custom Field ID.
     *
     * Comment: Custom Field ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * Account ID.
     *
     * Comment: Account ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("accountId")
     *
     * @var string|null
     */
    protected $accountId;

    /**
     * Custom field title.
     *
     * @SA\Type("string")
     * @SA\SerializedName("title")
     *
     * @var string|null
     */
    protected $title;

    /**
     * Custom field type
     * Type of custom field, Enum: Text, DropDown, Numeric, Money, Percentage, Date, Duration, Checkbox.
     *
     * @see \Zibios\WrikePhpLibrary\Enum\CustomFieldTypeEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("type")
     *
     * @var string|null
     */
    protected $type;

    /**
     * List of user IDs, who share the custom field.
     *
     * Comment: Contact ID list
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("sharedIds")
     *
     * @var array|string[]|null
     */
    protected $sharedIds;

    /**
     * Deleted flag is present and set to true, if custom field is deleted/hidden.
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("deleted")
     *
     * @var bool|null
     */
    protected $deleted;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param mixed $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSharedIds()
    {
        return $this->sharedIds;
    }

    /**
     * @param mixed $sharedIds
     *
     * @return $this
     */
    public function setSharedIds($sharedIds)
    {
        $this->sharedIds = $sharedIds;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }
}
