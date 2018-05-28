<?php
declare(strict_types=1);

namespace BSA\Contracts;

interface IStudent
{
    public function getId() : int;
    public function getName() : string;
}
