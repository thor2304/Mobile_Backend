<?php

namespace App\Models;

use JsonSerializable;

class Car implements JsonSerializable
{
    private string $model;
    private int $id;
    private int $engineCCSize;

    private float $pricePerDay;
    private float $pricePerWeek;

    private float $doors;
    private string $description;

    private int $wheelSize;

    private FuelType $fuelType;

    private Manufacturer $manufacturer;

    private Transmission $transmission;

    /**
     * @param string $model
     * @param int $id
     * @param int $engineCCSize
     * @param float $pricePerDay
     * @param float $pricePerWeek
     * @param float $doors
     * @param string $description
     * @param int $wheelSize
     * @param FuelType $fuelType
     * @param Manufacturer $manufacturer
     * @param Transmission $transmission
     */
    public function __construct(string $model, int $id, int $engineCCSize, float $pricePerDay, float $pricePerWeek, float $doors, string $description, int $wheelSize, FuelType $fuelType, Manufacturer $manufacturer, Transmission $transmission)
    {
        $this->model = $model;
        $this->id = $id;
        $this->engineCCSize = $engineCCSize;
        $this->pricePerDay = $pricePerDay;
        $this->pricePerWeek = $pricePerWeek;
        $this->doors = $doors;
        $this->description = $description;
        $this->wheelSize = $wheelSize;
        $this->fuelType = $fuelType;
        $this->manufacturer = $manufacturer;
        $this->transmission = $transmission;
    }


    public function jsonSerialize() {
        return [
            'manufacturer' => $this->manufacturer,
            'model' => $this->model,
            'id' => $this->id,
            'engineCCSize' => $this->engineCCSize,
            'pricePerDay' => $this->pricePerDay,
            'pricePerWeek' => $this->pricePerWeek,
            'doors' => $this->doors,
            'description' => $this->description,
            'wheelSize' => $this->wheelSize,
            'fuelType' => $this->fuelType,
            'transmission' => $this->transmission
        ];
    }
}

