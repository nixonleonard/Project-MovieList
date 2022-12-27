<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function watchList(){
        return $this->belongsTo(watchList::class);
    }

    public function character(){
        return $this->hasMany(character::class);
    }

    public function movieGenres(){
        return $this->belongsToMany(movieGenres::class);
    }

}
