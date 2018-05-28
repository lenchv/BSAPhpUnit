<?php
declare(strict_types=1);

namespace BSA\Contracts;

interface IGradeBook
{
    public function gradesFor(IStudent $student) : array;
}
