<?php

namespace App\Repository\Contracts;

use App\Entity\Car;

interface ICarRepository
{
    public function save(Car $car) : Car;
    public function getAll() : array;
    public function getById(int $id) : Car;
    public function delete(Car $car);
}
