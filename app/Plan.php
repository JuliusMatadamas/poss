<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'from', 'to', 'client_id'
    ];

    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
