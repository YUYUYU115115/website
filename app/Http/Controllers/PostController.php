<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * ブログ一覧を表示する
     * @return view
     */
    public function showList()
    {
        $posts = Post::all();

        return view('post.list', ['posts' => $posts]);
    }
    /**
     * ブログ詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $post = Post::find($id);


        return view('post.detail', ['post' => $post]);
    }
}
