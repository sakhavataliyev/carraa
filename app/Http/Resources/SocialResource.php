<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'tiktok' => $this->tiktok,
            'github' => $this->github,
            'linkedin' => $this->linkedin,
            'pinterest' => $this->pinterest,
            'youtube' => $this->youtube,
            'whatsapp' => $this->whatsapp,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];

    }

}
