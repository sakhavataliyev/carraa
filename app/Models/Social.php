<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'facebook',
        'twitter',
        'instagram',
        'tiktok',
        'github',
        'linkedin',
        'pinterest',
        'youtube',
        'whatsapp',
        'address',
        'phone',
        'email',
        'latitude',
        'longitude',
    ];


}
