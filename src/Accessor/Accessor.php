<?php

declare(strict_types=1);

namespace Polidog\ObjectAccess\Accessor;

interface Accessor
{
    public function getter($object, string $key);

    public function setter($object, string $key, $value, bool $force = false);
}
