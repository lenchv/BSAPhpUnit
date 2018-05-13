<?php

namespace BSATests\IntegrationTest;

use PHPUnit\Framework\TestCase;

use BSA\IntegrationTest\DataType;
use BSA\IntegrationTest\ALU;

class ALUTest extends TestCase
{
    public function testSumInteger()
    {
        $a = new DataType\Integer(2);
        $b = new DataType\Integer(2);
        $this->assertEquals(4, ALU::sum($a, $b));
    }

    public function testSumFloat()
    {
        $a = new DataType\FloatType(2.25);
        $b = new DataType\FloatType(2.25);
        $this->assertEquals(4.5, ALU::sum($a, $b));
    }
}