<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function Movie()
    {
    	return $this->belongsTo(Movie::class);
    }
}
