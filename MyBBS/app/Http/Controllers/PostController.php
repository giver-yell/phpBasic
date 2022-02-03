<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * 初期画面
     *
     * @param   void
     * @return  void
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }


    /**
     * 詳細画面
     *
     * @param   object   $post
     * @return  void
     */
    // Implicit Binding
    public function show(Post $post)
    {
        // 存在しないIDで404を表示
        // $post = Post::findOrFail($id);
        return view('posts.show')
            ->with(['post' => $post]);
    }


    /**
     * 作成画面
     *
     * @param   void
     * @return  void
     */
    public function create()
    {
        return view('posts.create');
    }


    /**
     * 作成処理
     *
     * @param   object   $request
     * @return  void
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required|min:3',
            'body'  => 'required',
        ]);

        // 書き込み処理
        $post = new Post();
        $post->title = $request->title;
        $post->body  = $request->body;
        $post->save();

        // indexにリダイレクト
        return redirect()
            ->route('posts.index');
    }
}
