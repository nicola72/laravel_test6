<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function articles()
    {
        return $this->hasManyThrough(
            'App\Article',
            'App\User',
            'country_id', //Foreign key on user table
            'user_id', //Foreign key on articles table
            'id', //local key on countries table
            'id' //local key on user table
            );
    }
}
