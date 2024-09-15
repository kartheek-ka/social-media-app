<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;  // Import the User model
use App\Models\User; 
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LikesController extends Controller
{
    //

    public function likeinsert(Request $request){
       

        $userId = session('user_id');
              
      $post_id=$_POST['post_id'];

        Like::create([
            'user_id' => $userId,
            'post_id' => $post_id
        ]);
        
        $count_post = DB::table('likes')->where('post_id', $post_id)->count();
        echo $count_post;


        // return redirect() -> route('dashboard'); 
    }

}
