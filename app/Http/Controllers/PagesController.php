<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    //
    public function index()
    {
     
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('pages/index')->with('posts',$posts);
    }
    public function about()
    {
        $title = 'about';
        return view('pages/about')->with('title',$title);
    }
    public function services()
    {
        $data = array(
            'title' => 'services',
            'services' => ['web','programmin','SEO']
        );
        return view('pages/services')->with($data);
    }
}
