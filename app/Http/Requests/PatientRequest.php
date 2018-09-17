<?php

namespace IntelGUA\MedicalAssistant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'first_name' => 'required|max:75',
            'last_name' => 'required|max:75',
            'phone' => 'required|max:15|numeric|digits:8',
            'address' => 'required|max:150',
            'email' => 'required|unique:patients|email|max:150',
            'birth_date' => 'required|',
            'gender' => 'required'
        ];
    }
}
