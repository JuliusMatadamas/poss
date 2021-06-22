<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'second_name', 'third_name', 'birth_date', 'genre', 'colony_id', 'address', 'phone', 'personal_email'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    /*
    public function permissions()
    {
        return $this->hasMany('App\Employee');
    }
    */

    public function colony()
    {
        return $this->belongsTo('App\Colony');
    }
}
