<?php

namespace opencasts\Http\Controllers;

use opencasts\Video;
use opencasts\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use opencasts\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $videos = Video::all();

        return view('home', compact('user', 'videos'));
    }
}
