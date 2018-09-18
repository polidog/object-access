<?php

declare(strict_types=1);

namespace Polidog\ObjectAccess\Accessor;

class ObjectAccessor implements Accessor
{
    /**
     * @param $object
     * @param string $key
     * @return mixed
     */
    public function getter($object, string $key)
    {
        return \Closure::bind(function ($key) {
            if (false === property_exists($this, $key)) {
                throw new \InvalidArgumentException(sprintf('%s is not property.', $key));
            }

            return $this->$key;
        }, $object, \get_class($object))($key);

    }

    public function setter($object, string $key, $value, bool $force = false): void
    {
        \Closure::bind(function ($key, $value) use ($force): void {
            if (false === $force && false === property_exists($this, $key)) {
                throw new \InvalidArgumentException(sprintf('%s is not property.', $key));
            }
            $this->$key = $value;
        }, $object, \get_class($object))($key, $value);

    }
}
