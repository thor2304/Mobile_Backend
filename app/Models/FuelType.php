<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JsonSerializable;

class FuelType extends Model
{
    const PETROL = "Petrol";
    const DIESEL = "Diesel";
    const ELECTRIC = "Electric";

    use HasFactory;
}
