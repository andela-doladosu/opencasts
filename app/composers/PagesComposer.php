<?php 

namespace Opencasts\Composers\PagesComposer;

use DB;
use Opencasts\User;
use Opencasts\Video;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

View::composer('pages.*', function ($view)
{
    $user = Auth::user();
    $categories = $categories = DB::table('videos')
            ->select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->get();
 
    $view->with('categories', $categories)->with('user', $user);
});
