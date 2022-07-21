<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Lecturer extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        'fname', 'lname', 'email', 'join_date', 'password', 'department', 'gender', 'mobile_no', 'birth_date', 'address', 'pro_pic', 'education'
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
            'address' => $this->address,
            'education' => $this->education,
            'birth_date' => $this->birth_date
        ];
    }
}
