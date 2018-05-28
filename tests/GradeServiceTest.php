<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use BSA\GradeService;
use BSA\GradeBook;
use BSA\Student;

class GradeServiceTest extends TestCase
{
    public function testAverageGrades()
    {
        $gradeBookStub = $this->createMock(GradeBook::class);
        $gradeBookStub->method('gradesFor')
            ->willReturn([3.5, 4.0, 4.9]);
        $studentMock = $this->createMock(Student::class);

        $this->gradeService = new GradeService($gradeBookStub);
        $this->assertEquals(4.1333333333, $this->gradeService->averageGrades($studentMock));
    }
}