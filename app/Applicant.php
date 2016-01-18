<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //

    protected $fillable = [
    		'name', 'email', 'phone', 'gender', 'id_type', 'id_number', 
    		'marital_status', 'photo', 'recommendation_letter', 
    		'english_translation', 'bangla_translation'
    ];

    /*public function qualifications()
    {
    	return $this->hasMany('App\Qualification');
    }*/
}
