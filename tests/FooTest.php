<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Foo;

class FooTest extends TestCase {

    //Test function bar() OK
    public function testBar_Ok() {
        $expected = 'bar';
        $foo = new Foo();
        $actual = $foo->bar();

        $this->assertEquals($expected, $actual);
    }

    //Test function bar() NG
    public function testBar_Ng() {
        $expected = 'foo';
        $foo = new Foo();
        $actual = $foo->bar();

        $this->assertEquals($expected, $actual);
    }
}
