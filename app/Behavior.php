<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Behavior extends Model
{

    protected $guarded = ['id'];

    protected $dates = ['behavior_date','created_at','updated_at'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function observations()
    {
        return $this->belongsToMany(Observation::class);
    }
}
