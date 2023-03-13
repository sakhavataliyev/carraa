<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'logo' => $this->logo,
            'favicon' => $this->favicon,
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'copyright' => $this->copyright,
            'analytics' => $this->analytics,
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
