<?php

namespace BSA\IntegrationTest;
use BSA\IntegrationTest\DataType\IDataType;

interface IAddable
{
    public function sum(IDataType $type) : IDataType;
}