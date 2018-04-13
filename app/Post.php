<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // what controller can fill in the database
    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        //User::class == 'App\User'
        return $this->belongsTo(User::class);
    }

}
