<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorizedSubModule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'submodule_id'
    ];

    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }

    public function submodule()
    {
        return $this->belongsTo('App\SubModule');
    }
}
