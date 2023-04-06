<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title',
        'description',
        'price',
        'sort_number',
        'status'
    ];


    public function pricecontents()
    {
        return $this->hasMany(PriceContent::class);
    }


}
