<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerCollection;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function getAll(): ManufacturerCollection
    {
        return new ManufacturerCollection(Manufacturer::all());
    }
}
