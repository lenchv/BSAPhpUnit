<?php

namespace BSA\IntegrationTest;

use BSA\IntegrationTest\DataType\IDataType;

class ALU
{
    public static function sum(IDataType $type1, IDataType $type2)
    {
        return $type1->getValue() + $type2->getValue();
    }
}