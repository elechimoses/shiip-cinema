<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    public function movie() {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
    
}
