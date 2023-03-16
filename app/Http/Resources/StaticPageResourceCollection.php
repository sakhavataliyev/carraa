<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StaticPageResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
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
