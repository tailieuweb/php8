<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Foo;

class FooTest extends TestCase {

    public function testBar() {
        $expec = 'bar';
        $foo = new Foo();
        $result = $foo->bar();

        $this->assertEquals($expec, $result);
    }
}
