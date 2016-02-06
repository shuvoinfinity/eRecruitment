<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApplicantFormRequest extends Request
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
                'name' => 'required|max:64',
                'email' =>'required|email|unique:applicants|max:64',
                'phone' => 'required|max:64',
                'gender' => 'required',
                'date_of_birth' => 'required|date',
                'id_type' => 'required',
                'id_number' => 'required|max:32',
                'marital_status' => 'required',
                'address' => 'required|max:255',
                'photo' => 'image|max:300',
                'recommendation_letter' => 'mimes:pdf|max:500',
                'english_translation' => 'required|max:1024',
                'bangla_translation' => 'required|max:1024'
                ];
    }
}
