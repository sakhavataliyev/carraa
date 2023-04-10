<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignKeyDefinition;

class PricePlan extends Model
{
    use HasFactory;

    protected $foreignKey = ['id'];

    protected $fillable = [
        'title',
        'description',
        'price',
        'sort_number',
        'status'
    ];

    // public function pricecontents()
    // {
    //     return $this->belongsTo(PriceContent::class);
    //     // return $this->hasOne(PricePlan::class, 'id', 'plan_id');

    // }
    


    public function pricecontent()
    {
        return $this->hasOne(PriceContent::class, 'id');
    }


    // public function priceplansm()
    // {
    //     return $this->hasOne(PricePlan::class, 'id', 'plan_id');
    // }


}
