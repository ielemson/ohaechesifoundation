<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'about',
        'status',
        'position',
        'slug',
        'picture',
        'facebook',
        'instagram',
        'twitter',
    ];
}
