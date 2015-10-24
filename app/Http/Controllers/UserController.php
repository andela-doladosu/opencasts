<?php

namespace App\Http\Controllers;

use Cloudder;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {   
        $user = Auth::user();

        $file = Input::file('avatar');
        if ($file) {
            Cloudder::upload($file);
            $upload =  Cloudder::getResult();
            $user->avatar = $upload['secure_url'];
        }
        
        $data = $request->only('email', 'username');

        $user->email = $data['email'];
        $user->username = $data['username'];
        
        $user->save();

        return redirect()->back()->with('user','data',['kkkm','kmkmk']);
    }
}