<?php

use PHPUnit\Framework\TestCase;
use BSA\Test;

class TestTest extends TestCase
{
    public function testTestFoo()
    {
        $this->assertE    $this->assertNotEquals(true, Test::foo(NAN));
        $this->assertNotEquals(false, Test::foo());
    }
}
