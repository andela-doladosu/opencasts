<?php

namespace Opencasts\Http\Controllers;

use Opencasts\Video;
use Opencasts\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Opencasts\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $videos = Video::all();

        return view('home', compact('user', 'videos'));
    }
}
