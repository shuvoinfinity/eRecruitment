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
                'email' =>'required|email|max:64',
                'phone' => 'required|numeric|max:64',
                'gender' => 'required',
                'id_type' => 'required',
                'id_number' => 'required|numeric|32',
                'marital_status' => 'required',
                'address' => 'required| max:255',
                'photo' => 'required|image',
                'recommendation_letter' => 'required|mimes:doc,dot,pdf',
                'english_translation' => 'max:1024',
                'bangla_translation' => 'max:1024'

        ];
    }
}
