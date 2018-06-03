<?php
declare(strict_types=1);

namespace Tests\Unit\Service;

use App\Entity\Car;
use App\Repository\CarRepository;
use App\Service\CarService;
use Tests\TestCase;

class CarServiceTest extends TestCase
{
    /**
     * @var CarService
     */
    private $carService;

    public function setUp()
    {
        parent::setUp();
        $carRepositoryStub = $this->createMock(CarRepository::class);
        $carRepositoryStub->method('getAll')
            ->willReturn([
                factory(Car::class)->make([
                    "price" => 3.2
                ]),
                factory(Car::class)->make([
                    "price" => 2.2
                ]),
                factory(Car::class)->make([
                    "price" => 1.0
                ])
            ]);

        $this->carService = new CarService($carRepositoryStub);
    }

    public function testGetAllCar()
    {
        $cars = $this->carService->getAll();

        $this->assertContainsOnlyInstancesOf(Car::class, $cars);
    }

    public function testTheCheapestCar()
    {
        $car = $this->carService->getTheCheapestCar();

        $this->assertEquals(1.0, $car->price);
    }
}
