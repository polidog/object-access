<?php

declare(strict_types=1);

namespace Polidog\ObjectAccess;

use Polidog\ObjectAccess\Accessor\Accessor;
use Polidog\ObjectAccess\Accessor\ObjectAccessor;

class ObjectAccess
{
    public static function createAccessor(): Accessor
    {
        return new ObjectAccessor();
    }
}
