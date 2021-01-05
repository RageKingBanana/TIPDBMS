<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Course;
use App\User;

class Section extends Model
{
    protected $table = 'section';

    protected $fillable = [
        'number',
        'level',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function students()
    {
        return $this->hasMany(User::class);
    }
}
