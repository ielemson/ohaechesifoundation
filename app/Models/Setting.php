<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_title',
        'website_logo_dark',
        'website_logo_light',
        'website_logo_small',
        'website_favicon',
        'meta_title',
        'meta_description',
        'meta_tag',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'who_we_are',
        'our_mission',
        'about',
    ];
}
