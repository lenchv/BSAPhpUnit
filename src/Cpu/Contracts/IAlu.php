<?php
declare(strict_types=1);

namespace BSA\Cpu\Contracts;

interface IAlu
{
    public function add(int $a, int $b) : int;
}
