<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $guarded = ['id'];
    protected $dates = ["created_at",'updated_at','intervention_date'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
