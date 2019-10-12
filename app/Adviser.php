<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    public function records()
    {
        return $this->hasMany('App\Record');
    }
}
