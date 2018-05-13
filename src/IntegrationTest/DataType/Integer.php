<?php

namespace BSA\IntegrationTest\DataType;
use BSA\IntegrationTest\IAddable;

class Integer implements IDataType, IAddable
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

    public function sum(IDataType $type): IDataType
    {
        return new Integer($this->getValue() + $type->getValue());
    }
}