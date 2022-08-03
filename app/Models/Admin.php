<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Admin extends Model
{
    use HasFactory, Searchable;

    protected $primaryKey = 'admin_unique_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'admin_unique_id',
        'fname',
        'lname',
        'email',
        'join_date',
        'password',
        'gender',
        'mobile_no',
        'birth_date',
        'address',
        'admin_avatar',
        'education',
        'status'
    ];

    public function toSearchableArray()
    {
        return [
            'admin_unique_id'=>$this->admin_unique_id,
            'fname'=>$this->fname,
            'lname'=>$this->lname,
            'email'=>$this->email,
            'mobile_no'=>$this->mobile_no,
        ];
    }
}
