<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function galeria()
    {
        $posts = \App\Models\Post::all();   
        $tags = \App\Models\Tag::all();
        return view('front.galeria')->with(array('posts' => $posts, 'tags' => $tags));
    }
    
    function quitarComas($tags){
        $tagsArray = explode(",", $tags);
        return $tagsArray;
    }
}
