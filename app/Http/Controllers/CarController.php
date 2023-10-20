<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarCollection;
use App\Http\Resources\CarResource;
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

    public function get(Car $car): CarResource
    {
        return new CarResource($car);
    }

    public function store(): CarResource
    {
        $car = new Car();
        $car->name = request()->only('model')['model'];
        $car->manufacturer_id = request()->only('manufacturer_id')['manufacturer_id'];
        $car->price = request()->only('price_per_day')['price_per_day'];
        $car->price = request()->only('price_per_week')['price_per_week'];
        $car->description = request()->only('description')['description'];
        $car->transmission_id = request()->only('transmission_id')['transmission_id'];
        $car->fuel_type_id = request()->only('fuel_type_id')['fuel_type_id'];
        $car->engine_cc_size = request()->only('engine_cc_size')['engine_cc_size'];
        $car->doors = request()->only('doors')['doors'];
        $car->wheel_size = request()->only('wheel_size')['wheel_size'];

        $car->save();
        return new CarResource($car);
    }

    public function hashAll(): string
    {
        $cars = Car::all();
        $string = '';
        foreach ($cars as $car) {
            $string = $string . $car->id;
        }
        return hash('sha1', $string);
    }
}
