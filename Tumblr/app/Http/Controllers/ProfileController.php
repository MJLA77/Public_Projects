<?php

//Author: Maria Lopez
//Date: 2018-11-08

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }

        $profile = $user->profile;
    
        $viewData = [
            'user' => $user,
            'profile' => $profile,
        ];

        return view('profile_form', $viewData);
    }

    public function update()
    {
        
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }
                
        $formData = request()->all();

        request()->validate([
            'name' => 'required|max:20',
            'handle' => 'required|max:10',
            'userpic' => 'required',
        ]);
           
        $profile = $user->profile;
        $profile->name = $formData['name'];
        $profile->handle = $formData['handle'];
        $profile->userpic = $formData['userpic'];

        $profile->save();
      
        return redirect("/profile");
    }
}
