<?php

namespace App\Service\Contracts;

use App\Entity\Car;
use App\Request\Contracts\ICarRequest;

interface ICarService
{
    public function add(ICarRequest $carRquest) : Car;
    public function getAll() : array;
    public function getById(int $id) : Car;
    public function update(int $id, ICarRequest $carRequest) : Car;
    public function delete(int $id);
}