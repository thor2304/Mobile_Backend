<?php

namespace App\Http\Controllers;

use App\Http\Resources\RentalCollection;
use App\Http\Resources\RentalResource;
use App\Models\Rental;
use App\Models\User;

class RentalController extends Controller
{
    public function getAll(): RentalCollection
    {
        return new RentalCollection(Rental::all());
    }

    public function getByRentalId(Rental $rental): RentalResource
    {
        return new RentalResource($rental);
    }

    public function getByUserId(User $user): RentalCollection
    {
        return new RentalCollection($user->rentals);
    }

    public function store(){
        $user = request()->only('user_id')['user_id'];
        $car = request()->only('car_id')['car_id'];
        $start_date = request()->only('start_date')['start_date'];
        $end_date = request()->only('end_date')['end_date'];

        $rental = Rental::create([
            'user_id' => $user,
            'car_id' => $car,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        $rental->save();

        return;
    }
}
