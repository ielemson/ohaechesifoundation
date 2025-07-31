<?php

namespace App\Models;

use EventGalleries;
use EventVideos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'event_banner', 'content', 'gallery','video','slug','status','location','meta_title','meta_keywords','meta_description'
    ];
   
    protected $casts = [
        'gallery' => 'array',
    ];

    public function galleries()
{
    return $this->hasMany(EventGalleries::class);
}

public function videos()
{
    return $this->hasMany(EventVideos::class);
}
}
