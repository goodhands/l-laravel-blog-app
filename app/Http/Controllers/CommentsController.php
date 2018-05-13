<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $posts){

        $this->validate(request(), ['body' => 'required']);
        $posts->addComment(request('body'));

        return back();
    }
}
