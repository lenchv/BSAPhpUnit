<?php

namespace BSATests\Test1;

use PHPUnit\Framework\TestCase;
use BSA\UnitTest\Bar;

class BarTest extends TestCase
{
    public function testFoo() {
        $this->assertEquals(4, Bar::foo(2));
    }
}
