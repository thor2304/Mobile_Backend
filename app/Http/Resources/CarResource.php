<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        return [
            "id" => $this->id,
            "model" => $this->model,
            "manufacturer" => new ManufacturerResource($this->manufacturer),
            "engineCCSize" => $this->engine_cc_size,
            "fuelType" => new FuelTypeResource($this->fuelType),
            "pricePerDay" => $this->price_per_day,
            "pricePerWeek" => $this->price_per_week,
            "doors" => $this->doors,
            "description" => $this->description,
            "transmission" => new TransmissionResource($this->transmission),
            "wheelSize" => $this->wheel_size,
            "imageName" => $this->image_name,
        ];
    }
}
