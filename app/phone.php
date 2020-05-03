<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $fillable = [
    	'user_id', 'phone'
    ];

    //getUserMethod
    public function user(){


    	//return $this->belongsTo('App\User');
    	// or
    	return $this->belongsTo(User::class);
    }

}
