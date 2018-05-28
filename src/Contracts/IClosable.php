<?php
declare(strict_types=1);

namespace BSA\Contracts;

interface IClosable
{
    public function close() : void;
}
