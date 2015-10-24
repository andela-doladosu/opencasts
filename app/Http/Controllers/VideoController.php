<?php

namespace opencasts\Http\Controllers;

use DB;
use opencasts\Video;
use opencasts\Http\Requests;
use Illuminate\Http\Request;
use opencasts\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use opencasts\Http\Controllers\Controller;

class VideoController extends Controller
{
    //protected $user;


    // public function __construct() 
    // {
    //     $this->user = Auth::user();
    // }

    protected function newVideo()
    {
        $user = Auth::user();
        return view('new', compact('user'));
    }

    public function added()
    {
        $user = Auth::user();
        return view('new', compact('user'));
    }

    protected function createVideo(Request $request)
    {
        $this->validate($request, [
            "title" => "required", 
            "description" => "required", 
            "url" => "url|required|unique:videos",
            "category" => "required"
        ]);
        $user = Auth::user();
        $owner = $user->id;
        $video = $request->all();
        $video['url'] = $this->makeEmbedLink($video['url']);
        $video['owner'] = $owner;        

        $this->create($video);

        unset($video['owner'], $video['_token']);
        return view('added', compact('user', 'video'));

    }

    protected function create(array $data)
    {
        return Video::create([
            "title" => $data['title'],
            "url"   => $data['url'],
            "description" => $data['description'],
            "user_id" => $data['owner'],
            "category" => $data['category']
        ]);
    }

    protected   function makeEmbedLink($link)
    {
        $videoAddress = explode('=', $link);
        $embed = 'https://www.youtube.com/embed/';
    
        return isset($videoAddress[1]) ? $embed.$videoAddress[1] : $link;
    }

    protected function video($id)
    {   
        $user = Auth::user();
        $video = Video::find($id);
        return view('video', compact('user', 'video'));
    }

    protected function personalVideos()
    {   
        $user = Auth::user();
        $videos = Video::where('user_id', '=', $user->id)->get();
       
        return view('videos', compact('user', 'videos'));
    }

    protected function allVideos()
    {
        $user = Auth::user();
        $allVideos = Video::all();
        return view('videos', compact('user', 'videos'));
    }

    protected function categories()
    {
        $user = Auth::user();

        $categories = DB::table('videos')
            ->select('category')
            ->groupBy('category')
            ->get();
        return view('categories', compact('user', 'categories'));
    }

    protected function category($category)
    {   
  
        $user = Auth::user();
        $videos = Video::where('category', '=', $category)->get();

        return view('category', compact('user', 'videos'));
    }
}
