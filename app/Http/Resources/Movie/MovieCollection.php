<?php

namespace App\Http\Resources\Movie;

use Illuminate\Http\Resources\Json\Resource;

class MovieCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "href" => [
                "movie_link" => route('movies.show', $this->id)
            ]
        ];
    }
}
