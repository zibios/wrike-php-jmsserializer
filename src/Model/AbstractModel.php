<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model;

/**
 * Abstract Model.
 *
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
abstract class AbstractModel implements ModelInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        $properties = get_object_vars($this);

        return $this->parseArray($properties);
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    private function parseArray(array $values)
    {
        foreach ($values as $key => $value) {
            if (is_array($value)) {
                $values[$key] = $this->parseArray($value);
            }

            if ($value instanceof ModelInterface) {
                $values[$key] = $value->toArray();
            }
        }

        return $values;
    }
}
