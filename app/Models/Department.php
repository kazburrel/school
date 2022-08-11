<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, Searchable, SoftDeletes;

    protected $primaryKey = 'dept_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dept_id','dept_name', 'hod', 'hod_pic', 'join_date', 'stu_cap', 'dept_details'
    ];

    public function toSearchableArray()
    {
        return  [
            'dept_id' => $this->dept_id,
            'dept_name' => $this->dept_name,
            'hod' => $this->hod,
            'join_date' => $this->join_date,
            'dept_details' => $this->dept_details
        ];
    }

    public function students(){
        return $this->hasMany(Student::class, 'dept_id');
    }
    
    public function libraryAssets(){
        return $this->hasMany(LibraryAsset::class, 'dept_id');
    }
}
