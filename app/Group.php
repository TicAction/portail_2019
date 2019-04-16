<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded=['id'];
    protected  $dates =['created_at','updated_at'];

    public function grade()
    {
        return $this->hasOne(Grade::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
