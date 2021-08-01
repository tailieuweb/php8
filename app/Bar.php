<?php namespace App;

class Bar {

    public function bar() {
        if (5 % 2 == 1) {
            echo 'Is even';
        }
        return 'bar';
    }

    public function foo() {
        return 'foo';
    }

    public function fooBar() {
        return 'fooBar';
    }

}