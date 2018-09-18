<?php

namespace Polidog\ObjectAccess\Test;


use PHPUnit\Framework\TestCase;
use Polidog\ObjectAccess\Accessor\Accessor;
use Polidog\ObjectAccess\ObjectAccess;

class ObjectAccessTest extends TestCase
{
    public function testCreateAccessor() : void
    {
        $accessor = ObjectAccess::createAccessor();
        $this->assertInstanceOf(Accessor::class, $accessor);
    }
}