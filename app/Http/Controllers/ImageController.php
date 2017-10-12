<?php

namespace App\Http\Controllers;
/*
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
*/



use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Redirect;

use Input;
use Image;



class ImageController extends Controller
{



    public function store(Request $request){


        $imagen = new \App\Image();
        $file = Input::file('path');
        $random = str_random(10);
        $name = $random.'-'.$file->getClientOriginalName();
        $path = public_path('users/imagenes/posts/'.$name);
        $url = 'users/imagenes/posts/'.$name;
        $image = Image::make($file->getRealPath());
        $imagen ->nameImage = $url;
        $imagen->save();
        $image->save ($path);

        $post = new Post();
        $post->author_id = Input::get("from_user");
        $post->body = Input::get("content");
        $post->image_id = $imagen->id;
       //dd($post->author_id);
        $post->save();
return Redirect::to('/users/blog');

        //return '<img src="'.$url.'"/>';

    }


}
