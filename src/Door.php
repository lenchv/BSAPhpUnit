<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IClosable;

class Door implements IClosable
{
    private $closed;

    public function close() : void
    {
        $this->closed = true;
    }
}
