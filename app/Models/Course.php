<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Course extends Model
{
    use HasFactory, Searchable;

    protected $primaryKey = 'course_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'course_id',
        'lecturer_id',
        'course_name',
        'course_code',
        'course_det',
        'start_date',
        'course_duration',
        'course_price',
        'lecturer',
        'max_student',
        'course_avatar'
    ];

    public function toSearchableArray()
    {
        return [
            'course_name' => $this->course_name,
            'course_code' => $this->course_date,
            'course_det' => $this->course_det,
            // 'lecturer' => $this->lecture,
        ];
    }

    public function lecturerDetails(){
        return $this->belongsTo(Lecturer::class, 'lecturer_id', 'lecturer_id');
    }
}
