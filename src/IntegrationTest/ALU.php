<?php

namespace BSA\IntegrationTest;

use BSA\IntegrationTest\DataType\IDataType;

class ALU
{
    public static function sum(IAddable $type1, IDataType $type2)
    {
        return $type1->sum($type2)->getValue();
    }
}