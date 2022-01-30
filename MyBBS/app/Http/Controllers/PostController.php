<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        'title A',
        'title B',
        'title C'
    ];

    /**
     * 初期画面
     *
     * @param   void
     * @return  void
     */
    public function index()
    {
        return view('index')
            ->with(['posts' => $this->posts]);
    }


    /**
     * 詳細画面
     *
     * @param   $id   int   ID
     * @return  void
     */
    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
