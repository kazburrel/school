<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'dept_name', 'hod', 'hod_pic', 'join_date', 'stu_cap', 'dept_details'
    ];

    // public function scopeFilter($query, array $filters){
    //     if ($filters['search'] ?? false) {
    //         $query->where('hod', 'like', '%' . request('search'). '%');
    //     }
    // }



    public function toSearchableArray()
    {
        return  [
            'dept_name' => $this->dept_name,
            'hod' => $this->hod,
            'join_date' => $this->join_date,
            'dept_details' => $this->dept_details
        ];
    }
}
