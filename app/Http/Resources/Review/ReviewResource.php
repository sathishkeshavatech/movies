<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
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
            "user" => $this->customer,
            "comment" => $this->review,
            "star" => $this->rating

        ];
    }
}
