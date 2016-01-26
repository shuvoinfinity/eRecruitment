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
                'address' => 'required| max:255',
                'photo' => 'required|mimes:jpeg,bmp,png| max:150',
                'recommendation_letter' => 'required|mimes:pdf| max:200',
                'english_translation' => 'required|max:1024',
                'bangla_translation' => 'required|max:1024',
              /*  'degree.*' => 'required|max:64',
                'institute.*' => 'required|max:120',
                'result.*' => 'required|max:32',
                'passing_year.*' => 'required|max:4',
                'designation.*' => 'max:64',
                'organization.*' => 'max:120',
                'from.*' => 'date',
                'to.*' => 'date'*/

        ];
    }
}
