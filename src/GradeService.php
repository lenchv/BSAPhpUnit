<?php
declare(strict_types=1);

namespace BSA;

class GradeService
{
    private $gradeBook;

    public function __construct(GradeBook $gradeBook)
    {
        $this->gradeBook = $gradeBook;
    }

    public function averageGrades(Student $student) : float
    {
        $grades = $this->gradeBook->gradesFor($student);

        return array_reduce($grades, function (float $result, $mark) {
            return $result + $mark;
        }, 0.0) / count($grades);
    }
}
