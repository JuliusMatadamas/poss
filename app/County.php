<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class County extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'state_id'
    ];

    public function zipcodes()
    {
        return $this->hasMany('App\ZipCode');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
}
