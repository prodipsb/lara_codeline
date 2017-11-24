<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentModel;
use App\Http\Requests\CommentRequest;
use Session;

class CommentController extends Controller
{
    public function save_comment(CommentRequest $request){
       // dd($request);
        $slug = $request->slug;
        $comment = new CommentModel;

        $comment->film_id = $request->film_id;
        $comment->film_slug = $slug;
        $comment->name = $request->name;
        $comment->email = strtolower(trim(preg_replace('/\s+/','', $request->email)));
        $comment->comment = $request->comment;
      //  dd($comment);
        $comment->save();
      //   dd($comment);
    Session::put('s_mgs', 'Thank You For Comment!');
    return redirect('details/'.$slug);
    }
}
