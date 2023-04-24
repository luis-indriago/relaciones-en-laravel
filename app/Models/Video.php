<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

     // relación uno a muchos polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    // relación muchos a muchos polimorfica
    public function posts(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
