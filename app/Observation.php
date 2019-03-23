<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Observation extends Model
{
    public function behaviors()
    {
        return $this->belongsToMany(Behavior::class);
    }

    public function severity()
    {
        return $this->belongsTo(Severity::class);
    }
}
