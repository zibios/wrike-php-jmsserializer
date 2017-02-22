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
use Zibios\WrikePhpJmsserializer\Model\Common\CustomFieldModel;
use Zibios\WrikePhpJmsserializer\Model\Common\MetadataModel;
use Zibios\WrikePhpJmsserializer\Model\Common\ProjectModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Folder Resource Model.
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class FolderResourceModel implements ResourceModelInterface
{
    /**
     * Folder ID.
     *
     * Comment: Folder ID
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
     * Title.
     *
     * @SA\Type("string")
     * @SA\SerializedName("title")
     *
     * @var string|null
     */
    protected $title;

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
     * Description.
     *
     * @SA\Type("string")
     * @SA\SerializedName("description")
     *
     * @var string|null
     */
    protected $description;

    /**
     * Color.
     *
     * Folder color, Enum
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("color")
     *
     * @var string|null
     */
    protected $color;

    /**
     * List of user IDs, who share the folder.
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
     * List of parent folder IDs.
     *
     * Comment: Folder ID list
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("parentIds")
     *
     * @var array|string[]|null
     */
    protected $parentIds;

    /**
     * List of child folder IDs.
     *
     * Comment: Folder ID list
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("childIds")
     *
     * @var array|string[]|null
     */
    protected $childIds;

    /**
     * List of super parent folder IDs.
     *
     * Comment: Folder ID list
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("superParentIds")
     *
     * @var array|string[]|null
     */
    protected $superParentIds;

    /**
     * Folder scope.
     *
     * Folder scope, Enum
     *
     * @SA\Type("string")
     * @SA\SerializedName("scope")
     *
     * @var string|null
     */
    protected $scope;

    /**
     * True if folder has attachments.
     *
     * @SA\Type("boolean")
     * @SA\SerializedName("hasAttachments")
     *
     * @var string|null
     */
    protected $hasAttachments;

    /**
     * Total count of folder attachments.
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
     * Link to open folder in web workspace, if user has appropriate access.
     *
     * @SA\Type("string")
     * @SA\SerializedName("permalink")
     *
     * @var string|null
     */
    protected $permalink;

    /**
     * Folder workflow ID.
     *
     * Comment: Workflow ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("workflowId")
     *
     * @var string|null
     */
    protected $workflowId;

    /**
     * List of folder metadata entries.
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
     * Custom column IDs.
     *
     * Comment: Optional
     * Comment: Custom Field ID
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("customColumnIds")
     *
     * @var array|string[]|null
     */
    protected $customColumnIds;

    /**
     * Project details, present only for project folders.
     *
     * Comment: Optional
     *
     * @SA\Type("Zibios\WrikePhpJmsserializer\Model\Common\ProjectModel")
     * @SA\SerializedName("project")
     *
     * @var ProjectModel|null
     */
    protected $project;

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
    public function getChildIds()
    {
        return $this->childIds;
    }

    /**
     * @param array|null|\string[] $childIds
     *
     * @return $this
     */
    public function setChildIds($childIds)
    {
        $this->childIds = $childIds;

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
     * @return null|string
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
    }

    /**
     * @param null|string $hasAttachments
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
    public function getWorkflowId()
    {
        return $this->workflowId;
    }

    /**
     * @param null|string $workflowId
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        $this->workflowId = $workflowId;

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

    /**
     * @return array|null|\string[]
     */
    public function getCustomColumnIds()
    {
        return $this->customColumnIds;
    }

    /**
     * @param array|null|\string[] $customColumnIds
     *
     * @return $this
     */
    public function setCustomColumnIds($customColumnIds)
    {
        $this->customColumnIds = $customColumnIds;

        return $this;
    }

    /**
     * @return null|ProjectModel
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param null|ProjectModel $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }
}
