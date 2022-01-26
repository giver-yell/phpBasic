<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'title A',
            'title B',
            'title C'
        ];

        return view('index')
            ->with(['posts' => $posts]);
    }
}
