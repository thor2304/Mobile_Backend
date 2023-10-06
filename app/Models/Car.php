<?php

namespace App\Models;

use JsonSerializable;

class Car implements JsonSerializable
{
    private string $make;
    private string $model;

    public function __construct(string $make, string $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function jsonSerialize() {
        return [
            'make' => $this->make,
            'model' => $this->model
        ];
    }


}

