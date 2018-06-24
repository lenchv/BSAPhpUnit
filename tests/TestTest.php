<?php

use PHPUnit\Framework\TestCase;
use BSA\Test;

class TestTest extends TestCase
{
    public function testTestFoo()
    {
        $this->assertEquals(true, Test::foo(NAN));
    }
}
