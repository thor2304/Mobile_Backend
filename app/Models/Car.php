<?php

namespace App\Models;

use JsonSerializable;

class Car implements JsonSerializable
{
    private string $make;
    private string $model;

    public function __construct()
    {
        $this->make = "Mercedes";
        $this->model = "E500";
    }

    public function __toString(): string
    {
//        return $this->make . " " . $this->model;
        return "hello";
    }

    public function jsonSerialize() {
        return [
            'make' => $this->make,
            'model' => $this->model
        ];
    }


}

