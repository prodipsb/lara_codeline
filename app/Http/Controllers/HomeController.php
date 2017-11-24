<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmModel;
use App\CommentModel;
use View;

class HomeController extends Controller
{
   
    public function index(){
        
        $films = filmModel::paginate(1);
     //   dd($films);
        View::share('films', $films);
        return view('home');
    }
    
    public function film_details($slug){
        
        $film_obj = new FilmModel;
        $film = $film_obj::where('slug', $slug)->first();
        
        $comment = new CommentModel;
        $comments = $comment::where('film_slug', $slug)->get();
        
        View::share('film', $film);
        View::share('comments', $comments);
        return view('film_details');
        
    }
    
}
