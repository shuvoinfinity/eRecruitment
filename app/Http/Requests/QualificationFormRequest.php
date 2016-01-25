<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QualificationFormRequest extends Request
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
            'degree.*' => 'required|max:64',
            'institute.*' => 'required|max:120',
            'result.*' => 'required|max:32',
            'passing_year.*' => 'required|max:4'
        ];
    }
}
