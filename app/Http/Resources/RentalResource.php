<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RentalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "car"=>new CarResource($this->car),
            "user"=> new UserRessource($this->user),
            "startDate"=>$this->start_date,
            "endDate"=>$this->end_date,
        ];
    }
}
