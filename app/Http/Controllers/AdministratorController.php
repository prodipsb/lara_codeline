<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use Image;
use DB;
use Session;
use Redirect;

class AdministratorController extends Controller
{
    public function index(){
        return view('backend.add_film');
    }
    
    public function save_film(FilmRequest $request){
        
      //  dd('ok');
        $data = array();
        $data['title'] = $request->title;
        $slug = $request->title;
        $filterUrl = '/[^\-\s\pN\pL\?]+/u';
        $setHypenUrl = '/[\-\s]+/';
        
        $slug1 =preg_replace($filterUrl, '', mb_strtolower($slug, 'UTF-8'));
        $slug2 =preg_replace($setHypenUrl, '-', $slug1);
        $slugFinal = trim($slug2, '-');
        $data['slug'] = $slugFinal;
     //   dd($request);
        $data['description'] = $request->description;
        
        $genre = $request->genre;
       // dd($genre);
        $genres_str = implode(",",$genre);
        $data['genre'] = $genres_str;
        $data['realease_date'] = $request->realease_date;
        $data['rating'] = $request->rating;
        $data['ticket'] = $request->ticket;
        $data['country'] = $request->country;
        
        $photo = $request->file('photo');
        
        if (!empty($photo)) {
            
            $path = 'images/';
            $filename = $photo->getClientOriginalName();
            $film_photo = Image::make($request->file('photo'));
            $film_photo->resize(450, 250);
            $film_photo->save($path. $filename);
            $data['photo'] = $path . $filename;
        }
     
       
        DB::table('films')->insert($data);
        Session::put('s_mgs', 'Film Info Saved Successfully!');
        return Redirect::back()->withErrors('');
        
    }
    
    
    
    
    
    
}
