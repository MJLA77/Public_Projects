<?php

//Author: Maria Lopez
//Date: 2018-11-08

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User_profiles;
use App\Models\Recommended_blog;
use App\Models\Radar;
use App\User;

class recblog{}
class radarblog{}

class NewsController extends Controller
{

    

    public function index($id=1)
    {

        //this is getting the users from the database
        $primaryUser = $this->getUser($id);

        //this is getting the blogs from the database
        $blogs = $this->getBlogs($primaryUser);

        $recommendedBlogs = $this->getrecommendedBlogs();

        $radarBlogs = $this->getRadarblogs();

        $loggedUser = request()->user();
        
        
        $viewData = [
            
            'userinfo'=> $primaryUser,
            
            'blogData'=> $blogs,
            
            'recommendedblogs'=> $recommendedBlogs,           
            
            'radarBlogs'=> $radarBlogs,

            'loggedUser'=>$loggedUser,
            
        ];
        
      
    return view ('welcome',$viewData);
    }

    public function getBlogs($primaryUser)
    {

        //get me all the tweets where the user id equals the primary users id - this is building a quiery 
        $blogs = Blog::where('user_id',$primaryUser->id)->get();

        return $blogs;

    }

    public function getUser($id)
    {
        $primaryUser = User::findorFail($id);

        return $primaryUser;
    }


    public function getrecommendedBlogs()
    {

        $recommendedblogs = recommended_blog::all();


        return $recommendedblogs;

    }
    

    public function getradarblogs()
    {

        $radarblogs = radar::all();
        
        return $radarblogs;

    }

    public function toggleLike($BlogsId)
    {
        $user = request()->user();
        $user->likedBlogs()->attach($blogsId);
    }


}
