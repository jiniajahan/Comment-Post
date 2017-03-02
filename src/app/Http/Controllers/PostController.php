<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->model =Post::class;
    }

    public function index(Request $request)
    {
        try {
            $posts = \DB::table('post')->get();
            dd($posts);

            return view('post', compact('posts'));

        } catch (\Exception $e) {
            throw $e;
        }
    }
}
