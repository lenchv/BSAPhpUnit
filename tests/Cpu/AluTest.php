<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use BSA\Cpu\Alu;

final class AluTest extends TestCase
{
    public function testAdd()
    {
        $alu = new Alu();

        $this->assertEquals(5, $alu->add(3, 2));
    }
}
