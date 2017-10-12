<?php

namespace App\Http\Controllers;
/*
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
*/


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\formvalidation;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Comment;



class RegisterController extends Controller
{


    public function showRegister(){
    return view("registro");

    }

    public function submitRegister(formvalidation $request)
    {
        $user = new User;
        $user->name = Input::get("name");
        $user->email = Input::get("email");
        $user->password = Input::get("password");
        $user->remember_token = Input::get("_token");

        $user->save();

        return view("registroSuccess");
    }

    public function submitUserRegister(formvalidation $request)
    {
        //$user = $this->user->all();

        $user = new User;
        $user->name = Input::get("name");
        $user->email = Input::get("email");
        $user->password =Input::get("password");
        $user->role = Input::get("role");
        $user->remember_token = Input::get("_token");

        $user->save();

        return view("admin/registroSuccess");
    }

    public function submitUserEdit(Request $request)
    {
        $user = new User;
        $user->name = Input::get("name");
        $user->email = Input::get("email");
        $user->password = bcrypt(Input::get("password"));
        // $user->role = Input::get("role");
        $user->remember_token = Input::get("_token");
        $user->save();

        return view("admin/registroSuccess");
    }

    public function submitComment(Request $request){
    $comment = new Comment;

       // $request->body=Input::get("comentario");
       // dd($request->body);
        $comment->body=Input::get("comentario");
        $comment->on_post=Input::get("on_post");
        $comment->from_user=Input::get("from_user");


        $comment->save();


        return Redirect::to ("users/blog");
}

}
