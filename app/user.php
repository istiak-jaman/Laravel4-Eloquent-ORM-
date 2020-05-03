<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
    	'name', 'email'
    ];

    public function getPhoneNumber(){

    	//return $this->hasOne('App\phone');

    	// or 
    	return $this->hasOne(Phone::class);
    }

    public function post(){
    	return $this->hasMany(Post::class);
    }
}
