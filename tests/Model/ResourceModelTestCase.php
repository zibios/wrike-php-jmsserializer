<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model;

use Zibios\WrikePhpJmsserializer\Model\AbstractModel;
use Zibios\WrikePhpJmsserializer\Model\ModelInterface;
use Zibios\WrikePhpJmsserializer\Model\ResourceModelInterface;
use Zibios\WrikePhpJmsserializer\Tests\TestCase;

/**
 * Resource Model Test Case.
 */
abstract class ResourceModelTestCase extends TestCase
{
    /**
     * @var string
     */
    protected $sourceClass;

    /**
     * @var ResourceModelInterface
     */
    protected $object;

    /**
     * @var array
     */
    protected $properties;

    /**
     * Sets up the exception.
     */
    public function setUp()
    {
        $this->object = new $this->sourceClass();
    }

    /**
     * Test exception inheritance.
     */
    public function test_ResourceModel_ExtendProperClasses()
    {
        self::assertInstanceOf(ResourceModelInterface::class, $this->object, sprintf('"%s" should extend "%s"', get_class($this->object), ResourceModelInterface::class));
        self::assertInstanceOf($this->sourceClass, $this->object, sprintf('"%s" should extend "%s"', get_class($this->object), $this->sourceClass));
        self::assertInstanceOf(AbstractModel::class, $this->object, sprintf('"%s" should extend "%s"', get_class($this->object), AbstractModel::class));
        self::assertInstanceOf(ModelInterface::class, $this->object, sprintf('"%s" should extend "%s"', get_class($this->object), ModelInterface::class));
    }

    /**
     * Test properties methods.
     */
    public function test_properPropertiesMethods()
    {
        foreach ($this->properties as $propertyName) {
            $getter = sprintf('get%s', ucwords($propertyName));
            self::assertTrue(method_exists($this->object, $getter), sprintf('"%s" not exist for "%s"', $getter, $this->sourceClass));
            $setter = sprintf('set%s', ucwords($propertyName));
            self::assertTrue(method_exists($this->object, $setter), sprintf('"%s" not exist for "%s"', $setter, $this->sourceClass));
        }

        $reflect = new \ReflectionClass($this->object);
        $properties = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
        foreach ($properties as $property) {
            self::assertContains(
                $property->getName(),
                $this->properties, sprintf('"%s" found in "%s" but not in tests', $property->getName(), $this->sourceClass)
            );
        }
    }

    /**
     * Test properties methods.
     */
    public function test_getSetMethods()
    {
        $testValue = 'testValue';

        foreach ($this->properties as $propertyName) {
            $getter = sprintf('get%s', ucwords($propertyName));
            self::assertNull($this->object->{$getter}());
            $arrayData = $this->object->toArray();
            self::assertNull($arrayData[$propertyName]);

            $setter = sprintf('set%s', ucwords($propertyName));
            self::assertSame($this->object->{$setter}($testValue), $this->object);
            self::assertSame($testValue, $this->object->{$getter}());
            $arrayData = $this->object->toArray();
            self::assertSame($testValue, $arrayData[$propertyName]);
        }
    }
}
