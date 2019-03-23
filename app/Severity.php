<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    public function observations()
    {
        return $this->hasMany(Observation::class);
    }
}
