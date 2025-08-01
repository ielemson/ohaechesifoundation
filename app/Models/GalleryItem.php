<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    use HasFactory;
      protected $fillable = [
        'title',
        'type', // 'image' or 'video'
        'file_path',
        'location'
    ];

    public function event()
{
    return $this->belongsTo(Event::class);
}


}
