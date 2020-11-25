<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

class Course extends Model
{
    use HasFactory, HasHashid, HashidRouting;

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('company_active', 'user_active')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot('position_id')->withTimestamps();
    }

    public function course_types()
    {
        return $this->hasMany(CourseType::class, 'id', 'type');
    }

    public function participants()
    {
        return $this->hasMany(Participant::class, 'course_id');
    }

    public function responsibility()
    {
        return $this->belongsTo('App\User', 'responsible');
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class)->withTimestamps();
    }
}
