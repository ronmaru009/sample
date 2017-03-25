<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class logRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'destination' => 'required|min:3',
            'timein' => 'required',
            'timeout' => 'required'
        ];
    }
}
