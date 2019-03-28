<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Student extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = auth()->id();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function behaviors()
    {
        return $this->belongsToMany(Behavior::class);
    }
    public function pis()
    {
        return $this->hasMany(Pi::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }


}
