<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\PricePlanResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PriceContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return 
        [
            'id' => $this->id,
            'plan_id' => $this->plan_id,
            'content' => $this->content,
            'sort_number' => $this->sort_number,
            'status' => $this->status,
            'priceplan' => new PricePlanResource($this->whenLoaded('priceplan'))
        ];

    }
}
