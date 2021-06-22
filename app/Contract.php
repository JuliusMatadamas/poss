<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'plan_id', 'employee_id', 'role_id', 'salary', 'up', 'down'
    ];

    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
