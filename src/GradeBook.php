<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IConnection;
use BSA\Contracts\IGradeBook;
use BSA\Contracts\IStudent;

class GradeBook implements IGradeBook
{
    private $connection;

    public function __constructor(IConnection $connection)
    {
        $this->connection = $connection;
    }

    public function gradesFor(IStudent $student): array
    {
        return $this->connection->getById('students', $student->getId());
    }
}
