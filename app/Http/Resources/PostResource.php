<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
       /*  return [ //so if the values name on the front end differs from the backend, it maps the variables name (cols) on the database to that on the html pages
            'my_new_title'=> $this->title
        ]; */
    }
}
