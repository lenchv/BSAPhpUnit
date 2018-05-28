<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IStudent;

class Student implements IStudent
{
    private $name;
    private $id;

    public function __construct(string $name, int $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
