<?php
/**
 * This file is part of the WrikePhpJmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Transformer;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Zibios\WrikePhpJmsserializer\Tests\TestCase;
use Zibios\WrikePhpLibrary\Resource\ContactResource;
use Zibios\WrikePhpLibrary\Transformer\ResponseTransformerInterface;

/**
 * Abstract Response Transformer Test Case
 */
abstract class ResponseTransformerTestCase extends TestCase
{
    /**
     * @var ResponseTransformerInterface
     */
    protected $object;

    /**
     * @return array
     */
    public function normalizeParamsProvider()
    {
        $responseArray = ['key' => 'value', 'number' => 100];
        $responseString = json_encode($responseArray);
        $bodyMock = $this->getMockForAbstractClass(StreamInterface::class);
        $bodyMock->expects(self::any())
            ->method('getContents')
            ->willReturn($responseString);
        $responseMock = $this->getMockForAbstractClass(ResponseInterface::class);
        $responseMock->expects(self::any())
            ->method('getBody')
            ->willReturn($bodyMock);

        $stdClass = new \stdClass();
        return [
            // [response, resourceClass, isValid]
            [$responseMock, ContactResource::class, true],
            [$stdClass, ContactResource::class, false],
            ['', ContactResource::class, false],
        ];
    }

    /**
     * @param mixed $response
     * @param mixed $resourceClass
     * @param boolean $isValid
     *
     * @dataProvider normalizeParamsProvider
     */
    public function test_normalizeParams($response, $resourceClass, $isValid)
    {
        $exceptionOccurred = false;
        $exceptionClass = '';
        $exceptionMessage = '';
        try {
            $this->object->transform($response, $resourceClass);
        } catch (\Throwable $t) {
            $exceptionOccurred = true;
        } catch (\Exception $e) {
            $exceptionOccurred = true;
            $exceptionClass = get_class($e);
            $exceptionMessage = $e->getMessage();
        }

        if ($isValid === false) {
            self::assertTrue($exceptionOccurred, 'Exception should be thrown');
        }
        if ($isValid === true) {
            self::assertFalse($exceptionOccurred, sprintf('Exception should not be thrown, "%s" "%s" occurred', $exceptionClass, $exceptionMessage));
        }
    }
}
