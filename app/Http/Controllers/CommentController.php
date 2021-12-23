<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(int $post_id, Request $request) {
        try {
            $comment = new Comment();
            
            $comment->body = $request->body;
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $post_id;

            $comment->save();

            return redirect('thispost/' . $post_id);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
