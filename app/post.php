<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
    	'user_id', 'category_id', 'title', 'description'
    ];

    public function category(){
    	

    	return $this->belongsTo(Category::class);
    }

    public function user(){
    	

    	return $this->belongsTo(User::class);
    }

}
