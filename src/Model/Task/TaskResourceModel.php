<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Task;

use Zibios\WrikePhpJmsserializer\Model\Common\CustomFieldModel;
use Zibios\WrikePhpJmsserializer\Model\Common\MetadataModel;
use Zibios\WrikePhpJmsserializer\Model\Common\TaskDatesModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Task Resource Model.
 */
class TaskResourceModel implements ResourceModelInterface
{
    /**
     * Task ID.
     *
     * Comment: Task ID
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
     * Title, cannot be empty.
     *
     * @SA\Type("string")
     * @SA\SerializedName("title")
     *
     * @var string|null
     */
    protected $title;

    /**
     * Description.
     *
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("description")
     *
     * @var string|null
     */
    protected $description;

    /**
     * Brief description.
     *
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("briefDescription")
     *
     * @var string|null
     */
    protected $briefDescription;

    /**
     * List of task parent folder IDs.
     *
     * Comment: Folder ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("parentIds")
     *
     * @var array|string[]|null
     */
    protected $parentIds;

    /**
     * List of task super parent folder IDs.
     *
     * Comment: Folder ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("superParentIds")
     *
     * @var array|string[]|null
     */
    protected $superParentIds;

    /**
     * List of user IDs, who share the task.
     *
     * Comment: Contact ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("sharedIds")
     *
     * @var array|string[]|null
     */
    protected $sharedIds;

    /**
     * List of responsible user IDs.
     *
     * Comment: Contact ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("responsibleIds")
     *
     * @var array|string[]|null
     */
    protected $responsibleIds;

    /**
     * Status of task.
     *
     * Task Status, Enum: Active, Completed, Deferred, Cancelled
     *
     * @see \Zibios\WrikePhpLibrary\Enum\TaskStatusEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("status")
     *
     * @var string|null
     */
    protected $status;

    /**
     * Importance of task.
     *
     * Task Importance, Enum: High, Normal, Low
     *
     * @see \Zibios\WrikePhpLibrary\Enum\TaskImportanceEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("importance")
     *
     * @var string|null
     */
    protected $importance;

    /**
     * Created date.
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
     * Updated date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("updatedDate")
     *
     * @var \DateTime|null
     */
    protected $updatedDate;

    /**
     * Completed date, field is present for tasks with 'Completed' status.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     * @SA\SerializedName("completedDate")
     *
     * @var \DateTime|null
     */
    protected $completedDate;

    /**
     * Task dates.
     *
     * @SA\Type("Zibios\WrikePhpJmsserializer\Model\Common\TaskDatesModel")
     * @SA\SerializedName("dates")
     *
     * @var TaskDatesModel|null
     */
    protected $dates;

    /**
     * Task scope.
     *
     * Tree Scope, Enum: WsRoot, RbRoot, WsFolder, RbFolder, WsTask, RbTask
     *
     * @see \Zibios\WrikePhpLibrary\Enum\TreeScopeEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("scope")
     *
     * @var string|null
     */
    protected $scope;

    /**
     * List of author IDs (currently contains 1 element).
     *
     * Comment: Contact ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("authorIds")
     *
     * @var array|string[]|null
     */
    protected $authorIds;

    /**
     * Custom status ID.
     *
     * Comment: Custom status ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("customStatusId")
     *
     * @var string|null
     */
    protected $customStatusId;

    /**
     * Has attachments.
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("hasAttachments")
     *
     * @var bool|null
     */
    protected $hasAttachments;

    /**
     * Total count of task attachments.
     *
     * Comment: Optional
     *
     * @SA\Type("integer")
     * @SA\SerializedName("attachmentCount")
     *
     * @var string|null
     */
    protected $attachmentCount;

    /**
     * Link to open task in web workspace, if user has appropriate access.
     *
     * @SA\Type("string")
     * @SA\SerializedName("permalink")
     *
     * @var string|null
     */
    protected $permalink;

    /**
     * Ordering key that defines task order in tasklist.
     *
     * @SA\Type("string")
     * @SA\SerializedName("priority")
     *
     * @var string|null
     */
    protected $priority;

    /**
     * Is a task followed by me.
     *
     * Comment: Optional
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("followedByMe")
     *
     * @var bool|null
     */
    protected $followedByMe;

    /**
     * List of user IDs, who follows task.
     *
     * Comment: Contact ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("followerIds")
     *
     * @var array|string[]|null
     */
    protected $followerIds;

    /**
     * Is a task recurrent.
     *
     * Comment: Optional
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("recurrent")
     *
     * @var bool|null
     */
    protected $recurrent;

    /**
     * List of super task IDs.
     *
     * Comment: Task ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("superTaskIds")
     *
     * @var array|string[]|null
     */
    protected $superTaskIds;

    /**
     * List of subtask IDs.
     *
     * Comment: Task ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("subTaskIds")
     *
     * @var array|string[]|null
     */
    protected $subTaskIds;

    /**
     * List of dependency IDs.
     *
     * Comment: Dependency ID list
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("dependencyIds")
     *
     * @var array|string[]|null
     */
    protected $dependencyIds;

    /**
     * List of task metadata entries.
     *
     * Metadata entry key-value pair
     * Metadata entries are isolated on per-client (application) basis
     * Comment: Optional
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Common\MetadataModel>")
     * @SA\SerializedName("metadata")
     *
     * @var array|MetadataModel[]|null
     */
    protected $metadata;

    /**
     * Custom fields.
     *
     * Comment: Optional
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Common\CustomFieldModel>")
     * @SA\SerializedName("customFields")
     *
     * @var array|CustomFieldModel[]|null
     */
    protected $customFields;

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
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param null|string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBriefDescription()
    {
        return $this->briefDescription;
    }

    /**
     * @param null|string $briefDescription
     *
     * @return $this
     */
    public function setBriefDescription($briefDescription)
    {
        $this->briefDescription = $briefDescription;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getParentIds()
    {
        return $this->parentIds;
    }

    /**
     * @param array|null|\string[] $parentIds
     *
     * @return $this
     */
    public function setParentIds($parentIds)
    {
        $this->parentIds = $parentIds;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getSuperParentIds()
    {
        return $this->superParentIds;
    }

    /**
     * @param array|null|\string[] $superParentIds
     *
     * @return $this
     */
    public function setSuperParentIds($superParentIds)
    {
        $this->superParentIds = $superParentIds;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getSharedIds()
    {
        return $this->sharedIds;
    }

    /**
     * @param array|null|\string[] $sharedIds
     *
     * @return $this
     */
    public function setSharedIds($sharedIds)
    {
        $this->sharedIds = $sharedIds;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getResponsibleIds()
    {
        return $this->responsibleIds;
    }

    /**
     * @param array|null|\string[] $responsibleIds
     *
     * @return $this
     */
    public function setResponsibleIds($responsibleIds)
    {
        $this->responsibleIds = $responsibleIds;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @param null|string $importance
     *
     * @return $this
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;

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
     * @return \DateTime|null
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * @param \DateTime|null $updatedDate
     *
     * @return $this
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }

    /**
     * @param \DateTime|null $completedDate
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->completedDate = $completedDate;

        return $this;
    }

    /**
     * @return null|TaskDatesModel
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param null|TaskDatesModel $dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->dates = $dates;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param null|string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getAuthorIds()
    {
        return $this->authorIds;
    }

    /**
     * @param array|null|\string[] $authorIds
     *
     * @return $this
     */
    public function setAuthorIds($authorIds)
    {
        $this->authorIds = $authorIds;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCustomStatusId()
    {
        return $this->customStatusId;
    }

    /**
     * @param null|string $customStatusId
     *
     * @return $this
     */
    public function setCustomStatusId($customStatusId)
    {
        $this->customStatusId = $customStatusId;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
    }

    /**
     * @param bool|null $hasAttachments
     *
     * @return $this
     */
    public function setHasAttachments($hasAttachments)
    {
        $this->hasAttachments = $hasAttachments;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAttachmentCount()
    {
        return $this->attachmentCount;
    }

    /**
     * @param null|string $attachmentCount
     *
     * @return $this
     */
    public function setAttachmentCount($attachmentCount)
    {
        $this->attachmentCount = $attachmentCount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * @param null|string $permalink
     *
     * @return $this
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param null|string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFollowedByMe()
    {
        return $this->followedByMe;
    }

    /**
     * @param bool|null $followedByMe
     *
     * @return $this
     */
    public function setFollowedByMe($followedByMe)
    {
        $this->followedByMe = $followedByMe;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getFollowerIds()
    {
        return $this->followerIds;
    }

    /**
     * @param array|null|\string[] $followerIds
     *
     * @return $this
     */
    public function setFollowerIds($followerIds)
    {
        $this->followerIds = $followerIds;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRecurrent()
    {
        return $this->recurrent;
    }

    /**
     * @param bool|null $recurrent
     *
     * @return $this
     */
    public function setRecurrent($recurrent)
    {
        $this->recurrent = $recurrent;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getSuperTaskIds()
    {
        return $this->superTaskIds;
    }

    /**
     * @param array|null|\string[] $superTaskIds
     *
     * @return $this
     */
    public function setSuperTaskIds($superTaskIds)
    {
        $this->superTaskIds = $superTaskIds;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getSubTaskIds()
    {
        return $this->subTaskIds;
    }

    /**
     * @param array|null|\string[] $subTaskIds
     *
     * @return $this
     */
    public function setSubTaskIds($subTaskIds)
    {
        $this->subTaskIds = $subTaskIds;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getDependencyIds()
    {
        return $this->dependencyIds;
    }

    /**
     * @param array|null|\string[] $dependencyIds
     *
     * @return $this
     */
    public function setDependencyIds($dependencyIds)
    {
        $this->dependencyIds = $dependencyIds;

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
     * @return array|null|CustomFieldModel[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array|null|CustomFieldModel[] $customFields
     *
     * @return $this
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }
}
