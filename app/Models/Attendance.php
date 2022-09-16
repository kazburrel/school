<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date','attendance','student','course'
    ];

    public function courseDetails(){
        return $this->hasOne(Course::class, 'course_id', 'course');
    }
}
