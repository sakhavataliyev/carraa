<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'twitter',
        'instagram',
        'tiktok',
        'github',
        'linkedin',
        'youtube',
        'whatsapp',
        'address',
        'phone',
        'email',
        'latitude',
        'longitude',
    ];

}
