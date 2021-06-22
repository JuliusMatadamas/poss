<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function submodules()
    {
        return $this->hasMany('App\SubModule');
    }
}
