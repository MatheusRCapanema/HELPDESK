<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function armazenarComments(Request $request){
        $comment =  $request->all();
        Comment::create($comment);

        return redirect()->route('ticket.list');

    }
}
