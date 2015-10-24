<?php

namespace App\Http\Controllers;

use App\Video;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $videos = Video::all();

        return view('home', compact('user', 'videos'));
    }
}
