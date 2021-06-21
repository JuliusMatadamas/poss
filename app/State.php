<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'country_id'
    ];

    public function counties()
    {
        return $this->hasMany('App\County');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

}
