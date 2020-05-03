<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class UserController extends Controller
{
    public function index(){

    	// Query Builder

    	/**$user = DB::table('users')
    	 		->join('phones','users.id','phones.user_id')
    			->get(); **/


    	
    	// // Eloquent ORM
    	// $user = User::all();
    	// return view('numbers', compact('user'));
    }
}
