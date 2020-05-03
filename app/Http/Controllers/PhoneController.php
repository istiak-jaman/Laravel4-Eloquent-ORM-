<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\User;
use DB;
class PhoneController extends Controller
{
    public function index(){


    	// Query Builder
    	/*$phone = DB::table('phones')
    			->join('users','phones.user_id', 'users.id')
    			->get();  */


    	//Eloquent ORM
    	 $phone = Phone::all();

    	return view('numbers', compact('phone'));
    }
}
