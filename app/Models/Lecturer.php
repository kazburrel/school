<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lecturer extends Authenticatable
{
    use HasFactory, Searchable, SoftDeletes;
    protected $primaryKey = 'lecturer_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'lecturer_id','fname', 'lname', 'email', 'join_date', 'password', 'department', 'gender', 'mobile_no', 'birth_date', 'address', 'pro_pic', 'education','status'
    ];

    public function toSearchableArray()
    {
        return  [
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            'join_date' => $this->join_date,
            'department' => $this->department,
            'gender' => $this->gender,
            'mobile_no' => $this->mobile_no,
            'birth_date' => $this->birth_date,
            'address' => $this->address,
            'education' => $this->education
        ];
    }

    public function courses(){
        return $this->hasMany(Course::class, 'lecturer_id');
    }

    public function departmentdetails(){
        return $this->belongsTo(Department::class, 'department', 'dept_name');
    }
}
