<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'content'=>$this->content,
            'mainpicture'=>$this->mainpicture,
            'user_id'=>$this->user_id,
            'car_id'=>$this->car_id,

        ];
    }
}
