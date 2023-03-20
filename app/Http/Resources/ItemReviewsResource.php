<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemReviewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'item_id' =>$this->item_id,
            'user_id' =>$this->user_id,
            'title' =>$this->title,
            'content' =>$this->content,
            'rating' =>$this->rating,
            'status' =>$this->status,
            
        ];
    }
}
