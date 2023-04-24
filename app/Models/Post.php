<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relación uno a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    // relación uno a muchos inversas

    public function categories(){
        return $this->belongsTo('App\Models\Category');
    }

    // relación uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
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
