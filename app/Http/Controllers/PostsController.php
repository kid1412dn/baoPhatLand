<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use App\Post;

class PostsController extends Controller
{
	public function show($id)
	{
		// if(! $post){
		// 	abort(404);
		// }
		// $posts=[
		// 	'h1'=>'Here is post 1',
		// 	'2'=>'Here is post 2',
		// ];
		return view('post',[
			'post'=> Post::where('id',$id)->firstOrFail(),
		]);
	}
}

