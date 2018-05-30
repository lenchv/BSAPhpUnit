<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    public function testCreationCar()
    {
        $carData = [
            "brand" => "BMW",
            "model" => "X5",
            "price" => 100000.99
        ];
        $response = $this->post('/api/car', $carData);

        $response
            ->assertStatus(200)
            ->assertJsonFragment($carData);
        $this->assertDatabaseHas('cars', array_merge(["id" => 1], $carData));
    }


    public function testCreationCarWithWrongData()
    {
        $carData = [
            "brand" => 123,
            "model" => "X5",
            "price" => []
        ];
        $response = $this->post('/api/car', $carData);

        $response->assertStatus(400);
        $this->assertDatabaseMissing('cars', ["brand" => 123]);
    }
}
