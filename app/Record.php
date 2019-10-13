<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
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
}
