<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->model =Post::class;
    }

    public function index(Request $request)
    {
        try {
            $posts = \DB::table('post')->get();
            return view('post.index', compact('posts'));

        } catch (\Exception $e) {
            throw $e;
        }
    }   
    public function details($id)
    {
        try {
            $post = \DB::table('post')->find($id);
            
            return view('post.details', compact('post'));

        } catch (\Exception $e) {
            throw $e;
        }
    }    
    
}
