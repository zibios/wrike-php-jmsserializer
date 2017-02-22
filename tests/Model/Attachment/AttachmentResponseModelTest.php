<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Attachment;

use Zibios\WrikePhpJmsserializer\Model\Attachment\AttachmentResponseModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResponseModelTestCase;

/**
 * Attachment Response Model Test.
 */
class AttachmentResponseModelTest extends ResponseModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = AttachmentResponseModel::class;
}
