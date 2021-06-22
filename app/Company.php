<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'short_name', 'rfc', 'colony_id'
    ];

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function colony()
    {
        return $this->belongsTo('App\Colony');
    }
}
