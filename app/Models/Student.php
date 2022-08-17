<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory,Searchable, SoftDeletes;

    protected $fillable = [
        'fname',
        'lname',
        'reg_no',
        'email',
        'reg_date',
        'department',
        'gender',
        'mobile_no',
        'parent_name',
        'parents_no',
        'birth_date',
        'address',
        'blood_g',
        'pro_pic',
        'status',
        'password'
    ];

    public function toSearchableArray()
    {
        // $department = Department::find(1);
        return  [
            'fname'=>$this->fname,
            'lname'=>$this->lname,
            'reg_no'=>$this->reg_no,
            'email'=>$this->email,
            'reg_date'=>$this->reg_date,                          
            'gender'=>$this->gender,
            'mobile_no'=>$this->mobile_no,
            'parent_name'=>$this->parent_name,
            'parents_no'=>$this->parents_no,
            'birth_date'=>$this->birth_date,
            'address'=>$this->address,
            'blood_g'=>$this->blood_g,
        ];
    }
    public function departmentDetails(){
        return $this->belongsTo(Department::class, 'department', 'dept_id');
    }
}
