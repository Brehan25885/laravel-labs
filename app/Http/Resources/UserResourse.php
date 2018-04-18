<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResourse extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name'=> $this->name,
            'email'=> $this->email

        ];
    }
}