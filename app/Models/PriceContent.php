<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'title',
        'content',
        'sort_number',
        'status'
    ];


    public function priceplans()
    {
        return $this->belongsTo(PricePlan::class, "plan_id", );
    }

}
