<?php
declare(strict_types=1);

namespace BSA\Cpu;

use BSA\CPU\Contracts\IAlu;

class Alu implements IAlu
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}

