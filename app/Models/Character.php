<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    public function actors(){
        return $this->belongsTo(actors::class);
    }

    public function movies(){
        return $this->belongsTo(movies::class);
    }

}
