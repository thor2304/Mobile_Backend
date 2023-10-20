<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarCollection;
use App\Models\Car;

class CarController extends Controller
{

    /**
     * @return CarCollection
     */
    public function getAll(): CarCollection
    {
        return new CarCollection(Car::all());
    }
}
