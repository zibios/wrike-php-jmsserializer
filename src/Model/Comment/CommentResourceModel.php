<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Comment;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;

/**
 * Comment Resource Model.
 */
class CommentResourceModel extends AbstractModel implements ResourceModelInterface
{
    /**
     * Comment ID.
     *
     * Comment: Comment ID
     *
     * @SA\Type("string")
     * @SA\SerializedName("id")
     *
     * @var string|null
     */
    protected $id;

    /**
     * Author ID.
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
     * Comment text.
     *
     * @SA\Type("string")
     * @SA\SerializedName("text")
     *
     * @var string|null
     */
    protected $text;

    /**
     * Created date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("string")
     * @SA\SerializedName("createdDate")
     *
     * @var string|null
     */
    protected $createdDate;

    /**
     * Updated date.
     *
     * Format: yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @SA\Type("string")
     * @SA\SerializedName("updatedDate")
     *
     * @var string|null
     */
    protected $updatedDate;

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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param null|string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param string|null $createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * @param null|string $updatedDate
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
}
