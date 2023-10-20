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

    private string $currentFuelType;

    /**
     * @param string $currentFuelType
     */
    public function __construct(string $currentFuelType){
        if (!in_array($currentFuelType, [self::PETROL, self::DIESEL, self::ELECTRIC])) {
            throw new \InvalidArgumentException("Invalid fuel type" . $currentFuelType);
        }
        $this->currentFuelType = $currentFuelType;
    }
}
