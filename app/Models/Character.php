<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'actor_id',
        'cname'
    ];

    public $timestamps = false;

    public function actors(){
        return $this->belongsTo(Actors::class);
    }

    public function movies(){
        return $this->belongsTo(Movies::class);
    }

}
