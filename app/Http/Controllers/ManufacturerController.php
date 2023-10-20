<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerCollection;
use App\Http\Resources\ManufacturerResource;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function getAll(): ManufacturerCollection
    {
        return new ManufacturerCollection(Manufacturer::all());
    }

    public function get(Manufacturer $manufacturer): ManufacturerResource
    {
        return new ManufacturerResource($manufacturer);
    }
}
