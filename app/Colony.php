<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colony extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'zip_code_id'
    ];

    public function companies()
    {
        return $this->hasMany('App\Company');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }

    public function zipcode()
    {
        return $this->belongsTo('App\ZipCode');
    }
}
