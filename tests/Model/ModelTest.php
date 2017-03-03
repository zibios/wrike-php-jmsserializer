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
use Zibios\WrikePhpJmsserializer\Tests\Fixtures\StubModel;
use Zibios\WrikePhpJmsserializer\Tests\Fixtures\StubSubModel;
use Zibios\WrikePhpJmsserializer\Tests\TestCase;

/**
 * Model Test.
 */
class ModelTest extends TestCase
{
    /** @var StubModel */
    protected $object;

    /**
     * @var array
     */
    protected $properties = [
        'id',
        'name',
        'subModel',
        'subModels',
    ];

    /**
     * Sets up the exception.
     */
    public function setUp()
    {
        $this->object = new StubModel();
    }

    /**
     * Test exception inheritance.
     */
    public function test_ExtendProperClasses()
    {
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
            $setter = sprintf('set%s', ucwords($propertyName));
            self::assertSame($this->object->{$setter}($testValue), $this->object);
            self::assertSame($testValue, $this->object->{$getter}());
        }
    }

    public function test_toArray()
    {
        $model = $this->getFullModel();
        $array = $model->toArray();

        $this->verify($model, $array);
    }

    public function test_toJson()
    {
        $model = $this->getFullModel();
        $json = $model->toJson();
        $array = json_decode($json, true);

        $this->verify($model, $array);
    }

    public function verify(StubModel $model, array $array)
    {
        self::assertSame($model->getId(), $array['id']);
        self::assertSame(100, $array['id']);
        self::assertSame($model->getName(), $array['name']);
        self::assertSame('Name', $array['name']);
        self::assertSame($model->getSubModel()->toArray(), $array['subModel']);
        self::assertSame($model->getSubModel()->getKey(), $array['subModel']['key']);
        self::assertSame('Key1', $array['subModel']['key']);
        self::assertSame($model->getSubModel()->getValue(), $array['subModel']['value']);
        self::assertSame('Value1', $array['subModel']['value']);

        self::assertSame($model->getSubModels()[0]->getKey(), $array['subModels'][0]['key']);
        self::assertSame('Key1', $array['subModels'][0]['key']);
        self::assertSame($model->getSubModels()[0]->getValue(), $array['subModels'][0]['value']);
        self::assertSame('Value1', $array['subModels'][0]['value']);

        self::assertSame($model->getSubModels()[1]->getKey(), $array['subModels'][1]['key']);
        self::assertSame('Key2', $array['subModels'][1]['key']);
        self::assertSame($model->getSubModels()[1]->getValue(), $array['subModels'][1]['value']);
        self::assertSame('Value2', $array['subModels'][1]['value']);
    }

    /**
     * @return StubModel
     */
    protected function getFullModel()
    {
        $subModel1 = new StubSubModel();
        $subModel1->setKey('Key1');
        $subModel1->setValue('Value1');

        $subModel2 = new StubSubModel();
        $subModel2->setKey('Key2');
        $subModel2->setValue('Value2');

        $model = new StubModel();
        $model->setId(100);
        $model->setName('Name');
        $model->setSubModel($subModel1);
        $model->setSubModels([$subModel1, $subModel2]);

        return $model;
    }
}
