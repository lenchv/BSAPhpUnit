<?php

namespace BSA\IntegrationTest\DataType;

use BSA\IntegrationTest\IAddable;

class StringType implements IDataType, IAddable
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue() : string
    {
        return $this->value;
    }

    public function sum(IDataType $data) : IDataType
    {
        return new StringType($this->value . $data->getValue());
    }
}