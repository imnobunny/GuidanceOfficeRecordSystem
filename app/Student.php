<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function relationship()
    {
        return $this->belongsTo('App\Relationship');
    }
}
