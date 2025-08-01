<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
      protected $fillable = [
        'title',
        'type', // 'image' or 'video'
        'file_path',
    ];

    // EventVideo.php
public function event()
{
    return $this->belongsTo(Event::class);
}
}
