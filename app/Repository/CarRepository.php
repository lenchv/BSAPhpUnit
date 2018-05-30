<?php

namespace App\Repository;

use App\Entity\Car;
use App\Repository\Contracts\ICarRepository;

class CarRepository implements ICarRepository
{
    public function save(Car $car) : Car
    {
        $car->save();

        return $car;
    }

    public function getAll(): array
    {
        return Car::all()->toArray();
    }

    public function getById(int $id): Car
    {
        return Car::find($id);
    }

    public function delete(Car $car)
    {
        $car->delete();
    }
}
