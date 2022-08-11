<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class LibraryAsset extends Model
{
    use HasFactory, Searchable, SoftDeletes;

    protected $primaryKey = 'asset_unique_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'asset_unique_id',
        'title',
        'subject',
        'authur',
        'publisher',
        'department',
        'assetType',
        'purchase_date',
        'price',
        'quantity',
        'status',
        'mode',
        'details'
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'subject' => $this->subject,
            'authur' => $this->authur,
            'publisher' => $this->publisher,
            'department' => $this->department,
            'assetType' => $this->assetType,
            'price' => $this->price,
            'mode' => $this->mode,
            'details' => $this->details
        ];
    }

    public function departmentDetails(){
        return $this->belongsTo(Department::class, 'department', 'dept_id');
    }
}
