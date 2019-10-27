<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function adviser()
    {
        return $this->belongsTo('App\Adviser');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    public function advisers()
    {
        return $this->hasMany('App\Advisers');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function histories()
    {
        return $this->hasMany('App\History');
    }

   
}
