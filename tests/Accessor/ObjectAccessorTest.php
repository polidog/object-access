<?php

namespace Polidog\ObjectAccess\Test\Accessor;


use PHPUnit\Framework\TestCase;
use Polidog\ObjectAccess\Accessor\ObjectAccessor;

class ObjectAccessorTest extends TestCase
{
    public function testGetter()
    {
        $name = 'user-1';

        $object = new DummyObject($name);

        $objectAccessor = new ObjectAccessor();
        $actual = $objectAccessor->getter($object, 'name');
        $this->assertSame($name, $actual);
    }

    public function testSetter()
    {
        $name = 'user-1';
        $object = new DummyObject('test');
        $objectAccessor = new ObjectAccessor();
        $objectAccessor->setter($object, 'name', $name);
        $actual = $objectAccessor->getter($object, 'name');

        $this->assertSame($name, $actual);

    }

    public function testSetterForce()
    {
        $id = 101;

        $object = new DummyObject('test');
        $objectAccessor = new ObjectAccessor();
        $objectAccessor->setter($object, 'id', $id, true);
        $actual = $objectAccessor->getter($object, 'id');

        $this->assertSame($id, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNoFouceSetter()
    {
        $id = 101;

        $object = new DummyObject('test');
        $objectAccessor = new ObjectAccessor();
        $objectAccessor->setter($object, 'id', $id);
    }

}

class DummyObject {

    /**
     * @var string
     */
    private $name;

    /**
     * DummyObject constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }




}