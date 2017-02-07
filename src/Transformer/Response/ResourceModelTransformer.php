<?php
/**
 * This file is part of the WrikePhpJmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Transformer\Response;

use Psr\Http\Message\ResponseInterface;
use Zibios\WrikePhpJmsserializer\Transformer\AbstractResponseTransformer;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;
use Zibios\WrikePhpJmsserializer\Model\ResponseModelInterface;

/**
 * Resource Model Transformer
 */
class ResourceModelTransformer extends AbstractResponseTransformer
{
    /**
     * @param ResponseInterface $response
     * @param string $resourceClass
     *
     * @return array|ResourceModelInterface[]|null
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function transform(ResponseInterface $response, $resourceClass)
    {
        $stringBody = $this->transformToStringBody($response);
        /** @var ResponseModelInterface $responseModel */
        $responseModel = $this->serializer->deserialize(
            $stringBody,
            $this->getModelClassForResource($resourceClass),
            'json'
        );

        return $responseModel->getData();
    }
}
