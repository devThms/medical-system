<?php

namespace IntelGUA\MedicalAssistant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
    public function rules(Request $request)
    {
        switch ($this->method()) {

            case 'POST':
                {
                    return [
                        'first_name' => 'required|max:75',
                        'last_name' => 'required|max:75',
                        'phone' => 'required|numeric|digits:8',
                        'address' => 'required|max:150',
                        'email' => 'required|unique:patients|email|max:150',
                        'birth_date' => 'required',
                        'gender' => 'required'
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'first_name' => 'required|max:75',
                        'last_name' => 'required|max:75',
                        'phone' => 'required|numeric|digits:8',
                        'address' => 'required|max:150',
                        'email' => 'required|email|unique:patients,email,' . $request->get('id'), //TODO Configurar validación Email en el Edit
                        'birth_date' => 'required',
                        'gender' => 'required'
                    ];
                }
            default:
                break;
        }
    }


}
