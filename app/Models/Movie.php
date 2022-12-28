<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function watchList(){
        return $this->belongsTo(WatchList::class);
    }

    public function character(){
        return $this->hasMany(Character::class);
    }

    public function genre(){
        return $this->belongsToMany(Genre::class);
    }

}
