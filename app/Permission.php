<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'authorized_sub_module_id', 'permission'
    ];

    public function authorizedsubModule()
    {
        return $this->belongsTo('App\AuthorizedSubModule');
    }
}
