<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\formvalidation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;



class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user, $post, $comment;
    public function __construct(User $user,Post $post, Comment $comment)
    {
        $this ->user= $user;
        $this ->post = $post;
        $this->comment = $comment;
    }

    public function showIndex()
    {
        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/homeAdmin");
        }else{
            return Redirect::to('login');
        }

    }


    public function showUserList()
    {
        $user = $this->user->all();
        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/listaUsuarios",compact("user"));
        }else{
            return Redirect::to('login');
        }

    }


    public function showPostsList()
    {
        $posts = $this->post->all();
        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/listaPosteos", compact("posts"));
        }else{
            return Redirect::to('login');
        }

    }

    public function showCommentsList(){
        $comment = $this->comment->all();
        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/listaComentarios",compact($comment));
        }else{
            return Redirect::to('login');
        }

    }


    //User Creacion editar y eliminar
    public function update(Request $request,  $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request-> password;
        $user->save();

        return redirect()->route('admin/listaUsuarios');
    }

    public function editUser($id){
        $user = User::find($id);



    }

    public function updateUser(Request $request){
        $user = $this->user->all();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // $user->role = Input::get("role");
       // $user->remember_token = Input::get("_token");
        $user->save();

        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view("admin/registroSuccess");
        }else{
            return Redirect::to('login');
        }


    }

    public function deleteUser($id){

            $user = User::findOrFail($id);

            $user->delete();

        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/listaUsuarios");
        }else{
            return Redirect::to('login');
        }


    }

    public function deletePost($id){

        $post = Post::findOrFail($id);
        $post->delete();

        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return Redirect::to('admin/listaPosteos');
        }else{
            return Redirect::to('login');
        }


    }

    public function deleteComment($id){

        $comment = Comment::findOrFail($id);
        $comment->delete();

        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/listaComentarios");
        }else{
            return Redirect::to('login');
        }

    }


    public function showNewUser(){
        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/nuevoUsuario");
        }else{
            return Redirect::to('login');
        }

    }
    public function newUser(formvalidation $request){
        $user = new User;
        $user->name = Input::get("name");
        $user->email = Input::get("email");
        $user->password = Hash::make("password");
        $user->role = Input::get("role");
        $user->remember_token = Input::get("_token");
        $user->save();

        $userRole = Auth::user()->role;
        if($userRole=="admin"){
            return view ("admin/registroSuccess");
        }else{
            return Redirect::to('login');
        }


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
