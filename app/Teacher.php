<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function records()
    {
        return $this->belongsTo('App\Record');
    }
}
