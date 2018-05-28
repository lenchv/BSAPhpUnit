<?php
declare(strict_types=1);

namespace BSA\Contracts;

interface IConnection
{
    public function getById(string $table, int $id) : array;
}
