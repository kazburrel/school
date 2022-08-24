<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registered_courses extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'reg_course_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'reg_course_id','courses', 'reg_no', 'dept_id'
    ];

    public function students(){
        return $this->hasMany(Student::class, 'reg_no', 'reg_no');
    }
}
