<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController extends Controller
{
    public function index(){
    	
    	//Query builder
    	/*$post = DB::table('posts')
    			->join('categories', 'posts.category_id', 'categories.id')
    			->join('users', 'posts.user_id','users.id')
    			->get(); **/




    	//Eloquent ORM
    	$post = Post::all();
    	return view('posts',compact('post'));
    }


    public function getIstiakPost(){

       //Query Builder
       /* $post = DB::table('posts')
                ->join('categories', 'posts.category_id', 'categories.id')
                ->join('users', 'posts.user_id', 'users.id')
                ->where('user_id',1)
                ->get(); **/

        // echo "<pre>";
        // print_r($post);
       $post = Post::where('user_id',2)->get();
       return view('posts_by_user', compact('post'));
    }


}
