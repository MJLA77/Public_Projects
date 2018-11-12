<?php
//Author: Maria Lopez
//Date: 2018-11-08
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }
    
        $viewData = [
            'user' => $user,

        ];

        return view('post', $viewData);
    }
   
    public function update()
    {
        //this means if you are not a logged in user
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }
                
        $formData = request()->all();

        request()->validate([
            'blogintro' => 'required|max:255',
            'handle' => 'required|max:10',
            'mainblogpic' => 'required',
            'blogquote' => 'required|max:255',
            'hashtags' => 'required|max:100',
        ]);
           
        $newpost = new Post();
        
        // this is linking to my db // this is linking to my form 
        $newpost->blogintro = $formData['blogintro'];
        $newpost->blogdesc = $formData['handle'];
        $newpost->mainblogpic = $formData['mainblogpic'];
        $newpost->blogquote = $formData['blogquote'];
        $newpost->hashtags = $formData['hashtags'];
        $newpost->user_id = $user->id;
        $newpost->save();

       
        return redirect("/");
    }
}
