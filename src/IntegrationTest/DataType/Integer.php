<?php

namespace BSA\IntegrationTest\DataType;

class Integer implements IDataType
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue() : int
    {
        return $this->value;
    }
}