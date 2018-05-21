<?php

namespace BSA;

class Test
{
    public static function foo($value) : bool
    {
        return $value != $value;
    }
}
