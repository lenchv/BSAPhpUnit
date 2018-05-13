<?php

namespace BSA\IntegrationTest\DataType;

use BSA\IntegrationTest\IAddable;

class FloatType implements IDataType, IAddable
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

    public function sum(IDataType $data) : IDataType
    {
        return new FloatType($this->getValue() + $data->getValue());
    }
}