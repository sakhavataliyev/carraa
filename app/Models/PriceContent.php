<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'content',
        'sort_number',
        'status'
    ];


    public function priceplan()
    {
        return $this->belongsTo(PricePlan::class);
    }
    

    // public function priceplans()
    // {
    //     return $this->hasOne(PricePlan::class, 'id', 'plan_id');
    //     // return $this->belongsTo(PricePlan::class);
    // }


    // public function priceplan()
    // {
    //     return $this->hasOne(PricePlan::class, 'id', 'plan_id');
    // }
    

    // public function priceplans()
    // {
    //     return $this->belongsTo(PricePlan::class);
    // }

}
