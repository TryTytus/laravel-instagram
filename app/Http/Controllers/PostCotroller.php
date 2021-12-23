<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use App\Models\Posts;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostCotroller extends Controller
{
    public function getAll() {
        $posts = DB::select(DB::raw("
        SELECT
        a.id,
        a.nickname,
        a.img,
        a.likes,
        a.title,
        a.title,
        (
            CASE WHEN a.id IN(
            SELECT DISTINCT
                i.id
            FROM
                posts AS i
            INNER JOIN likes ON i.id = likes.post_id AND likes.user_id = ".Auth::user()->id."
        ) THEN TRUE ELSE FALSE
        END
    ) AS isliked
    FROM
        posts AS a
    ORDER BY
        a.id
    DESC
        ;
        "));
       //return $posts;
       return view('home', ['posts' => $posts]);
    }

    public function store(Request $request) {
        try {
            $file = $request -> file('img') -> store('public');
            $post = new Posts();
            $user = Auth::user();
            $post->nickname = $user['nickname'];
            $post->img = pathinfo($file)['basename'];
            $post->likes = 0;
            $post->title = request('title');

            $post->save();

            Profile::where(
                'user_id', '=', $user["id"]
            )->increment('post_num');

            return redirect('/');
        }
        catch (\Exception $e) {
            return view('create_post', ['error' => $e]);
        }
    }
    public function getById($id) {
        $post = Posts::find($id);
        return $post;
    }
    public function getByIdWithComments($id) {
        $post = Posts::with('commets.user')->find($id);
        $isliked = Likes::where([
            ['user_id', '=', Auth::user()->id],
            ['post_id', '=', $id]
        ])->count();
        return view('post_view', ['post'=>$post, 'isliked' => $isliked]);
    }

    public function likeById($id) {

# find if user liked post

    $find = Likes::where([
        ['post_id', $id],
        ['user_id', Auth::user()['id']]
    ])->count();

       if($find !== 0){
           return null;
       }
        $likes = Posts::select('likes')
        ->where('id', $id)->get();
        $likes = $likes[0]['likes'];

        $update = Posts::where('id', $id)->
        update(['likes' => $likes + 1]);

        $addToTable = new Likes();

        $addToTable->post_id = $id;
        $addToTable->user_id = Auth::user()['id'];

        $addToTable->save();

        return true;
    }

    public function dislikeById($id) {

        # find if user liked post
            $find = Likes::where([
                ['post_id', $id],
                ['user_id', Auth::user()['id']]
            ])->count();

               if($find == 0){
                   return null;
               }

                $likes = Posts::select('likes')
                ->where('id', $id)->get();
                $likes = $likes[0]['likes'];

                $update = Posts::where('id', $id)->
                update(['likes' => $likes - 1]);

                $delete = Likes::where([
                    ['post_id','=', $id],
                    ['user_id','=', Auth::user()['id']]
                ]);

                $delete->delete();

                return $delete->count();
            }

    public function galleryPosts() {
            return view('gallery', ['posts' => Posts::all()]);
    }
}
