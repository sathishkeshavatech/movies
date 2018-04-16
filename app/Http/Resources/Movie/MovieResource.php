<?php

namespace App\Http\Resources\Movie;

use Illuminate\Http\Resources\Json\Resource;

class MovieResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "about" => $this->detail,
            "review" => $this->rating,
            "total_collection" => $this->collection,
            "href" => [
                "link" => route('reviews.index',$this->id)
            ]
        ];
    }
}
