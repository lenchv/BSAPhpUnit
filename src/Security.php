<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IClosable;

class Security
{
    private $door;
    private $window;

    public function __construct(IClosable $door, IClosable $window)
    {
        $this->door = $door;
        $this->window = $window;
    }

    public function securityOn()
    {
        $this->door->close();
        $this->window->close();
    }
}
