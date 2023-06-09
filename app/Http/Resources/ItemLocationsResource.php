<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemLocationsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'item_id' => $this->item_id,
            'address' =>$this->address,
            'state' =>$this->state,
            'city' =>$this->city,
            'locality' =>$this->locality,
            'pincode' =>$this->pincode,
            'country' =>$this->country,
            'latitude' =>$this->latitude,
            'longitude' => $this->longitude,

        ];
    }
}
