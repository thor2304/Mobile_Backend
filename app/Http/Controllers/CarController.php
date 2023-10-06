<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{

    /**
     * @return Car[]
     */
    public function getAll(): array
    {
        return [new Car("BMW", "M5"), new Car("Tesla", "Model S")];
    }
}
