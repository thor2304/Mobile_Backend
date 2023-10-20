<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $isUserRequest = str_starts_with($request->getRequestUri(), "/users");

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email'=>$this->email,
            "rentals"=> $this->when($isUserRequest, RentalResource::collection($this->rentals)),
        ];
    }
}
