<?php

namespace App\Service;

use App\Entity\Car;
use App\Repository\Contracts\ICarRepository;
use App\Request\Contracts\ICarRequest;
use App\Service\Contracts\ICarService;

class CarService implements ICarService
{
    private $cars;

    public function __construct(ICarRepository $cars)
    {
        $this->cars = $cars;
    }

    public function add(ICarRequest $carRequest): Car
    {
        $car = new Car;
        $car->model = $carRequest->model();
        $car->brand = $carRequest->brand();
        $car->price = $carRequest->price();

        return $this->cars->save($car);
    }

    public function getAll(): array
    {
        return $this->cars->getAll();
    }

    public function getById(int $id): Car
    {
        return $this->cars->getById($id);
    }

    public function update(int $id, ICarRequest $carRequest) : Car
    {
        $car = $this->cars->getById($id);

        $car->model = $carRequest->model();
        $car->brand = $carRequest->brand();
        $car->price = $carRequest->price();

        return $this->cars->save($car);
    }

    public function delete(int $id)
    {
        $car = $this->cars->getById($id);
        $this->cars->delete($car);
    }

    public function getTheCheapestCar() : ?Car
    {
        $cars = $this->getAll();

        return array_reduce($cars, function ($theCheapest, $car) {
            return ($car->price < $theCheapest->price)
                ? $car
                : $theCheapest;
        }, $cars[0]);
    }
}