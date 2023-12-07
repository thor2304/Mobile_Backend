<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarCollection;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use function Psy\debug;

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

    public function store(Request $request): CarResource
    {
        $car = new Car();
        $car->model = $request->only('model')['model'];
        $car->manufacturer_id = $request->only('manufacturerId')['manufacturerId'];
        $car->engine_cc_size = $request->only('engineCCSize')['engineCCSize'];
        $car->fuel_type_id = $request->only('fuelTypeId')['fuelTypeId'];
        $car->price_per_day = $request->only('pricePerDay')['pricePerDay'];
        $car->price_per_week = $request->only('pricePerWeek')['pricePerWeek'];
        $car->doors = $request->only('doors')['doors'];
        $car->description = $request->only('description')['description'];
        $car->transmission_id = $request->only('transmissionId')['transmissionId'];
        $car->wheel_size = $request->only('wheelSize')['wheelSize'];
        $car->image_name = $request->only('imageName')['imageName'];
        $car->image_names = $request->only('imageNames')['imageNames'];

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
