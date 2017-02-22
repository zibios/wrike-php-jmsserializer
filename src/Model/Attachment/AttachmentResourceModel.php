<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Attachment;

use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Attachment Resource Model.
 */
class AttachmentResourceModel implements ResourceModelInterface
{
    /**
     * Attachment ID.
     *
     * Attachment: Attachment ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * ID of user who uploaded the attachment.
     *
     * Comment: Contact ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("authorId")
     *
     * @var string|null
     */
    protected $authorId;

    /**
     * Attachment filename.
     *
     * @SA\Type("string")
     * @SA\SerializedName("name")
     *
     * @var string|null
     */
    protected $name;

    /**
     * Upload date.
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
     * Attachment version.
     *
     * @SA\Type("integer")
     * @SA\SerializedName("version")
     *
     * @var int|null
     */
    protected $version;

    /**
     * Attachment type.
     *
     * Attachment Type, Enum: Wrike, Google, DropBox, Box, OneDrive
     *
     * @see \Zibios\WrikePhpLibrary\Enum\AttachmentTypeEnum
     *
     * @SA\Type("string")
     * @SA\SerializedName("type")
     *
     * @var string|null
     */
    protected $type;

    /**
     * Content type.
     *
     * @SA\Type("string")
     * @SA\SerializedName("contentType")
     *
     * @var string|null
     */
    protected $contentType;

    /**
     * Size for Wrike Attachments. For external attachments, size is equal to -1.
     *
     * @SA\Type("integer")
     * @SA\SerializedName("size")
     *
     * @var int|null
     */
    protected $size;

    /**
     * ID of related task. Only one of taskId/folderId fields is present.
     *
     * @SA\Type("string")
     * @SA\SerializedName("taskId")
     *
     * @var string|null
     */
    protected $taskId;

    /**
     * ID of related folder. Only one of taskId/folderId fields is present.
     *
     * @SA\Type("string")
     * @SA\SerializedName("folderId")
     *
     * @var string|null
     */
    protected $folderId;

    /**
     * ID of related comment.
     *
     * @SA\Type("string")
     * @SA\SerializedName("commentId")
     *
     * @var string|null
     */
    protected $commentId;

    /**
     * ID of current attachment version.
     *
     * Comment: Attachment ID
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("currentAttachmentId")
     *
     * @var string|null
     */
    protected $currentAttachmentId;

    /**
     * Link to download external attachment preview (present if preview is available).
     *
     * @SA\Type("string")
     * @SA\SerializedName("previewUrl")
     *
     * @var string|null
     */
    protected $previewUrl;

    /**
     * Link to download attachment.
     *
     * Comment: Optional
     *
     * @SA\Type("string")
     * @SA\SerializedName("url")
     *
     * @var string|null
     */
    protected $url;

    /**
     * Review IDs.
     *
     * Comment: Optional
     *
     * @SA\Type("array<string>")
     * @SA\SerializedName("reviewIds")
     *
     * @var array|string[]|null
     */
    protected $reviewIds;

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
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param null|string $authorId
     *
     * @return $this
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

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
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int|null $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param null|string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param null|string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @param null|string $folderId
     *
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @param null|string $commentId
     *
     * @return $this
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrentAttachmentId()
    {
        return $this->currentAttachmentId;
    }

    /**
     * @param null|string $currentAttachmentId
     *
     * @return $this
     */
    public function setCurrentAttachmentId($currentAttachmentId)
    {
        $this->currentAttachmentId = $currentAttachmentId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    /**
     * @param null|string $previewUrl
     *
     * @return $this
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param null|string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return array|null|\string[]
     */
    public function getReviewIds()
    {
        return $this->reviewIds;
    }

    /**
     * @param array|null|\string[] $reviewIds
     *
     * @return $this
     */
    public function setReviewIds($reviewIds)
    {
        $this->reviewIds = $reviewIds;

        return $this;
    }
}
