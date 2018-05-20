<?php

namespace BSA\IntegrationTest\DataType;

class FloatType implements IDataType
{
    private $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    public function getValue() : float
    {
        return $this->value;
    }
}