<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title','description','course_id','homework','video_id','slug'
    ];

    public function GetHomeworkAttribute($homework){
        return asset($homework);
    }

    protected $date = ['deleted_at'];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function videos()
    {
        return $this->belongsToMany('App\Video');
    }
}
