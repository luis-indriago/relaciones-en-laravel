<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    // Relación uno a muchos inversa
    public function post(){
        return $this->belongsTo('App\Models\User');
    }

    // Relación polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
