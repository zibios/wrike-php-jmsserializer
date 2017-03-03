<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Fixtures;

use Zibios\WrikePhpJmsserializer\Model\AbstractModel;

/**
 * Stub Model.
 */
class StubModel extends AbstractModel
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var mixed
     */
    protected $name;

    /**
     * @var array|StubSubModel[]
     */
    protected $subModels;

    /**
     * @var StubSubModel
     */
    protected $subModel;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array|StubSubModel[]
     */
    public function getSubModels()
    {
        return $this->subModels;
    }

    /**
     * @param array|StubSubModel[] $subModels
     *
     * @return $this
     */
    public function setSubModels($subModels)
    {
        $this->subModels = $subModels;

        return $this;
    }

    /**
     * @return StubSubModel
     */
    public function getSubModel()
    {
        return $this->subModel;
    }

    /**
     * @param StubSubModel $subModel
     *
     * @return $this
     */
    public function setSubModel($subModel)
    {
        $this->subModel = $subModel;

        return $this;
    }
}
