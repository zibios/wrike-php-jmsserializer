<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Account;

use Zibios\WrikePhpJmsserializer\Model\Common\MetadataModel;
use Zibios\WrikePhpJmsserializer\Model\Common\SubscriptionModel;
use Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResourceModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Account Resource Model.
 */
class AccountResourceModel implements ResourceModelInterface
{
    /**
     * Account ID.
     *
     * Comment: Account ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * Name of account.
     *
     * @SA\Type("string")
     * @SA\SerializedName("name")
     *
     * @var string|null
     */
    protected $name;

    /**
     * Date format: dd/MM/yyyy or MM/dd/yyyy.
     *
     * @SA\Type("string")
     * @SA\SerializedName("dateFormat")
     *
     * @var string|null
     */
    protected $dateFormat;

    /**
     * First day of week.
     *
     * Week Day, Enum: Sat, Sun, Mon
     *
     * @see \Zibios\WrikePhpLibrary\Enum\WeekDayEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("firstDayOfWeek")
     *
     * @var string|null
     */
    protected $firstDayOfWeek;

    /**
     * List of weekdays, not empty.
     *
     * These days are used in task duration computation.
     * Week Day, Enum: Sun, Mon, Tue, Wed, Thu, Fri, Sat
     *
     * @see \Zibios\WrikePhpLibrary\Enum\WeekDayEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("workDays")
     *
     * @var string|null
     */
    protected $workDays;

    /**
     * Virtual folder, denotes the root folder of the account.
     *
     * Different users can have different elements in the root, according to their sharing scope.
     * Can be used in queries to get all folders/tasks in the account,
     * or to create folders/tasks in the user's account root
     *
     * Comment: Folder ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("rootFolderId")
     *
     * @var string|null
     */
    protected $rootFolderId;

    /**
     * Virtual folder, denotes the root for deleted folders and tasks.
     *
     * Can be used in queries to get all folders/tasks in the Recycle Bin. Cannot be used in modification queries.
     *
     * Comment: Folder ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("recycleBinId")
     *
     * @var string|null
     */
    protected $recycleBinId;

    /**
     * Registration date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("createdDate")
     *
     * @var \DateTime|null
     */
    protected $createdDate;

    /**
     * Account subscription.
     *
     * Comment: Optional
     *
     * @SA\Type("Zibios\WrikePhpJmsserializer\Model\Common\SubscriptionModel")
     * @SA\SerializedName("subscription")
     *
     * @var SubscriptionModel|null
     */
    protected $subscription;

    /**
     * List of account metadata entries.
     * Entries could be read by all users of account and modified by admins only
     * Metadata entry key-value pair
     * Metadata entries are isolated on per-client (application) basis.
     *
     * Comment: Optional
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Common\MetadataModel>")
     * @SA\SerializedName("metadata")
     *
     * @var array|MetadataModel[]|null
     */
    protected $metadata;

    /**
     * List of custom fields accessible for requesting user in the account.
     * Entries could be read by all users of account and modified by admins only.
     *
     * Comment: Optional
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\CustomField\CustomFieldResourceModel>")
     * @SA\SerializedName("customFields")
     *
     * @var array|CustomFieldResourceModel[]|null
     */
    protected $customFields;

    /**
     * Date when the user has joined the account.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("joinedDate")
     *
     * @var \DateTime|null
     */
    protected $joinedDate;

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
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * @param null|string $dateFormat
     *
     * @return $this
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstDayOfWeek()
    {
        return $this->firstDayOfWeek;
    }

    /**
     * @param null|string $firstDayOfWeek
     *
     * @return $this
     */
    public function setFirstDayOfWeek($firstDayOfWeek)
    {
        $this->firstDayOfWeek = $firstDayOfWeek;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getWorkDays()
    {
        return $this->workDays;
    }

    /**
     * @param null|string $workDays
     *
     * @return $this
     */
    public function setWorkDays($workDays)
    {
        $this->workDays = $workDays;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRootFolderId()
    {
        return $this->rootFolderId;
    }

    /**
     * @param null|string $rootFolderId
     *
     * @return $this
     */
    public function setRootFolderId($rootFolderId)
    {
        $this->rootFolderId = $rootFolderId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRecycleBinId()
    {
        return $this->recycleBinId;
    }

    /**
     * @param null|string $recycleBinId
     *
     * @return $this
     */
    public function setRecycleBinId($recycleBinId)
    {
        $this->recycleBinId = $recycleBinId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime|null $createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return null|SubscriptionModel
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param null|SubscriptionModel $subscription
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * @return array|null|MetadataModel[]
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array|null|MetadataModel[] $metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return array|null|CustomFieldResourceModel[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array|null|CustomFieldResourceModel[] $customFields
     *
     * @return $this
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getJoinedDate()
    {
        return $this->joinedDate;
    }

    /**
     * @param \DateTime|null $joinedDate
     *
     * @return $this
     */
    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;

        return $this;
    }
}
