<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IGradeBook;
use BSA\Contracts\IStudent;

class GradeService
{
    private $gradeBook;

    public function __construct(IGradeBook $gradeBook)
    {
        $this->gradeBook = $gradeBook;
    }

    public function averageGrades(IStudent $student) : float
    {
        $grades = $this->gradeBook->gradesFor($student);

        return array_reduce($grades, function (float $result, $mark) {
            return $result + $mark;
        }, 0.0) / count($grades);
    }
}
