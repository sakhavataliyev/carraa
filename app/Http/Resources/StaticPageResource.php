<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StaticPageResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }



    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function with(Request $request): array
    {
        return 
        [
            'version' => '1.0.0',
            'author_url' => url('http://carraa.com/'),

        ];
    }
}
