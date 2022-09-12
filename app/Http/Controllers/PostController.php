<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * ブログ一覧を表示する
     * @return view
     */
    public function showList()
    {
        return view('post.list');
    }
}
