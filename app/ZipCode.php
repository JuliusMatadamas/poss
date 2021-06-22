<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZipCode extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'zip_code', 'county_id'
    ];

    public function colonies()
    {
        return $this->hasMany('App\Colony');
    }

    public function county()
    {
        return $this->belongsTo('App\County');
    }
}
