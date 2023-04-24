<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    // relación muchos a muchos inversa polimorfica
    public function posts(){
        return $this->morphByMany('App\Models\Post', 'taggable');
    }

    // relación muchos a muchos inversa polimorfica
    public function videos(){
        return $this->morphByMany('App\Models\Video', 'taggable');
    }
}
