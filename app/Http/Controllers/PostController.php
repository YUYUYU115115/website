<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
}
