<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at' 
    ];

    public function applicant()
    {
    	return $this->belongsTo('App\Applicant');
    }
}
