<?php

namespace App\Http\Resources;

use App\Models\PriceContent;
use Illuminate\Http\Request;
use App\Http\Resources\PriceContentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PricePlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'sort_number' => $this->sort_number,
            'status' => $this->status,
            'pricecontent' => PriceContentResource::collection($this->whenLoaded('pricecontent'))
        ];
    }
}
