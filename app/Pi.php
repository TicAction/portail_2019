<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pi extends Model
{
    protected $guarded=['id'];
    protected $dates=['created_at','updated_at','pi_date'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
