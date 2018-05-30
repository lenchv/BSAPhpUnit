<?php

namespace App\Request;

use App\Request\Contracts\ICarRequest;

class CarRequest implements ICarRequest
{
    private $price;
    private $model;
    private $brand;

    public function __construct(string $brand, string $model, float $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }

    public function brand(): string
    {
        return $this->brand;
    }

    public function model(): string
    {
        return $this->model;
    }

    public function price(): float
    {
        return $this->price;
    }
}