<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubModule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'url', 'module_id'
    ];

    public function authorizedsubmodules()
    {
        return $this->hasMany('App\AuthorizedSubModule');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }
}
