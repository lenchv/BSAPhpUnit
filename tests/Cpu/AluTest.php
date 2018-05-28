<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use BSA\Cpu\Alu;

final class AluTest extends TestCase
{
    /**
     * @param int $a
     * @param int $b
     * @param int $s
     *
     * @testWith  [2, 3, 5]
     *            [3, -3, 0]
     */
    public function testAdd($a, $b, $s)
    {
        $alu = new Alu();

        $this->assertEquals($s, $alu->add($a, $b));
    }
}



