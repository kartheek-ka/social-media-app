<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  // Import the User model
use App\Models\User; 
class PostController extends Controller
{
    public function store(Request $request){

        $userId = session('user_id');

       
        $this -> validate($request, [
            'body' => 'required',
            
           
        ]);

        Post::create([
            'user_id' => $userId,
            'body' => $request -> body
        ]);

        return redirect() -> route('dashboard'); 
    }
}
