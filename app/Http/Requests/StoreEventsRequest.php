<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEventsRequest extends FormRequest
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


    protected function failedValidation(Validator $validator){
        dd($_POST);
        // dd(request()->all());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'calendar_event_name' => 'required',
            'calendar_event_description' => 'required',
            'calendar_event_location' => 'required',
            'all_day_input' => 'nullable',
            'calendar_event_start_date' => 'required',
            'calender_event_start_time' => [Rule::when($this->all_day === null, ['required_if:all_day,null'])],
            'calendar_event_end_date' => 'required',
            'calender_event_end_time' => [Rule::when($this->all_day === null, ['required_if:all_day,null'])],
            // 'status'=>['required', Rule::when($this->quantity > 0, ['in:in_stock,issue,repair'])],

        ];
    }

    // Add Event name 
    // Add Event Duration || All day
    // Add Event Description
    // Add Event Location
    // Add Event Handler
    // Add Department Attached to the event
}
