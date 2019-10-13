<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function record()
    {
        return $this->hasOne('App\Record');
    }
}
