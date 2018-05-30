<?php

namespace App\Request\Contracts;

interface ICarRequest
{
    public function model() : string;
    public function brand() : string;
    public function price() : float;
}
