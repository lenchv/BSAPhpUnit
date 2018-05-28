<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IClosable;

class Window implements IClosable
{
    private $closed;

    public function close() : void
    {
        $this->closed = true;
    }
}
