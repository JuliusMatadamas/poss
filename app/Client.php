<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'short_name', 'rfc', 'colony_id', 'company_id'
    ];

    public function plans()
    {
        return $this->hasMany('App\Plan');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function colony()
    {
        return $this->belongsTo('App\Colony');
    }
}
