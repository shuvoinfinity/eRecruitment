<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //

    protected $guarded = [
        'id', 'created_at', 'updated_at' 
    ];

    public function qualifications()
    {
    	return $this->hasMany('App\Qualification');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }
}
