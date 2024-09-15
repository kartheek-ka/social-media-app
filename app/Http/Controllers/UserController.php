<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Ensure this line is included

use Illuminate\Http\Request;
use App\Models\Post;  // Import the User model
use App\Models\Frienddata;   
use App\Models\Friendlink; 


class UserController extends Controller
{
    
    public function store(Request $request) {
        // validation

        $this -> validate($request, [
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'password_confirmed' => 'required|same:password',
        ]);

        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
            'username' => $request -> username,
        ]);

        auth()->attempt($request->only('email', 'password'));
        
        return redirect() -> route('dashboard'); 
    }

    public function dashboard() {

        // $posts = DB::table('posts')
        // ->join('users', 'posts.user_id', '=', 'users.id')
        // ->select('posts.*', 'users.name as name')
        // ->get();   
        $posts = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->leftJoin('likes', 'posts.id', '=', 'likes.post_id')
        ->select('posts.*', 'posts.user_id', 'posts.body','posts.created_at','posts.updated_at', 'users.name as name', DB::raw('COUNT(likes.id) as likes_count'))
        ->groupBy('posts.id', 'posts.user_id', 'posts.created_at','posts.updated_at', 'posts.body', 'users.name')
        ->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function home(){
        $friendIds = DB::table('friendlinks')
    ->pluck('friend_id'); // Get all friend_ids from friends table

     $usersNotFriends = DB::table('users')
    ->whereNotIn('id', $friendIds) // Select users whose IDs are not in the friend list
    ->select('id', 'name')
    ->get();
    $friendada = DB::table('friendlinks')->get();
    
        return view('home', ['userdetails' => $usersNotFriends,'friendada'=>$friendada]);
    }

    public function addfriend(Request $request){
        $userId = session('user_id');
              
        $friend_id=$_POST['friend_id'];
       
         
         $friendExists = DB::table('friendlinks')->where('friend_id', $friend_id)->exists();
         
       if (empty($friendExists)) {
        
        Friendlink::create([
              'user_id' => $userId, 
              'friend_id' => $friend_id
          ]);
        }

          
          
        //   $count_post = DB::table('likes')->where('post_id', $post_id)->count();
        //   echo $count_post;
  
    }

    public function myprofile(){
        
        $usersNotFriends = DB::table('users')
        ->join('friendlinks', 'friendlinks.friend_id', '=', 'users.id')
        ->get();  
        return view('myprofie', ['userdetails' => $usersNotFriends]);

    }

    public function logout(){
        // Auth::logout(); // Log out the user

        // $request->session()->invalidate(); // Invalidate the session

        // $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/'); // Redirect to a desired route or homepage

        // returng redirect() -> route('/');  
    }
}
