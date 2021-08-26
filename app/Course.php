<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course'];
    public function users()
    {
        return $this->BelongsToMany('App\User');
    }
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
