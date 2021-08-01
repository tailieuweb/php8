<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Models\Db;

class DbStubTest extends TestCase {

    //Test function getFoo() OK
    public function testGetFoo_Ok() {
        $expected = 'dbFoo';

        // Create a stub for the SomeClass
        $db = $this->createStub(Db::class);

        // Configure the stub
        $db->method('getFoo')
            ->willReturn('dbFoo');

        $actual = $db->getFoo();

        $this->assertSame($expected, $actual);
    }

    //Test function getFoo() Ng
    public function testGetFoo_Ng() {
        $expected = 'dbFoo';

        // Create a stub for the SomeClass
        $db = $this->createStub(Db::class);

        // Configure the stub
        $db->method('getFoo')
            ->willReturn('foo');

        $actual = $db->getFoo();

        $this->assertSame($expected, $actual);
    }
   
}
