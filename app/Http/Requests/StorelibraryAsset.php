<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorelibraryAsset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'subject'=>'required',
            'authur'=>'required',
            'publisher'=>'required',
            'department'=>'required',
            'assetType'=>'required',
            'purchase_date'=>'required',
            'price'=>'required',
            'quantity'=>['required'],
            'status'=>['required', Rule::when($this->quantity > 0, ['in:in_stock,issue,repair'])],
            'mode'=>'required',
            'details'=>'required'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Title',
            'subject' => 'Subject',
            'authur' => 'Authur',
           'publisher' => 'Publisher',
            'department' => 'Department',
            'assetType' => 'Asset Type',
            'purchase_date' => 'Purchase Date',
            'price' => "Price",
            'quantity' => "Quantity",
            'status' => "Status",
            'mode' => 'Mode',
            'details' => 'Details'
        ];
    }
}
