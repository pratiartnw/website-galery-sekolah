<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // mendefinisakn kolom yg boleh diisi
    protected $fillable = [
        'post_id',
        'position',
        'status',
        'title',
        'description',
        'image',
    ];

    // relasi ke post
    public function post(){
        return $this->belongsTo(Post::class);
    }

    // relasi ke image
    public function images(){
        return $this->hasMany(Image::class);
    }
}