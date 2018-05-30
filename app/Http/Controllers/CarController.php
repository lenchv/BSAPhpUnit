<?php

namespace App\Http\Controllers;

use App\Request\CarRequest;
use App\Service\Contracts\ICarService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    private $carService;

    public function __construct(ICarService $carService)
    {
        $this->carService = $carService;
    }

    public function create(Request $request)
    {
        try {
            $carRequest = new CarRequest(
                $request->brand,
                $request->model,
                $request->price
            );

            $car = $this->carService->add($carRequest);

            return response()->json($car, 201);
        } catch (\Throwable $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }
    }

    public function list()
    {
        return response()->json($this->carService->getAll());
    }

    public function detail($id)
    {
        try {
            $car = $this->carService->getById((int)$id);
            return response()->json($car);
        } catch (\Throwable $e) {
            return response()->json(["error" => "Car not found!"], 404);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $carRequest = new CarRequest(
                $request->brand,
                $request->model,
                $request->price
            );

            $updatedCar = $this->carService->update((int)$id, $carRequest);

            return response()->json($updatedCar);
        } catch (\Throwable $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }
    }

    public function delete($id)
    {
        try {
            $this->carService->delete((int)$id);
            return response()->json([]);
        } catch (\Throwable $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }
    }
}