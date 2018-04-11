<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function Review()
    {
    	return $this->hasMany(Review::class);
    }
}
