<?php

namespace BSA\IntegrationTest\DataType;

class StringType implements IDataType
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
}