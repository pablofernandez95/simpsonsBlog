<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
class UserPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user, $post, $image, $comment;
    public function __construct(User $user,Post $post,Image $image, Comment $comment)
    {
        $this ->user= $user;
        $this ->post = $post;

        $this ->image = $image;
        $this ->comment = $comment;

    }
    public function showBlog()
    {

        $posts = $this->post->all()->sortByDesc('id')->forPage(1,15);
        $comments =$this->comment->all();

        $userRole = Auth::user()->role;
        if($userRole=="author"){
            return view ("users/blog",compact("posts","comments"));
        }else{
            return Redirect::to('login');
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCharacters()
    {
            $userRole = Auth::user()->role;
            if($userRole == "author"){
             return view ("users/personajes");
             }else{
                return Redirect::to('login');
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showImages()
    {
        $images = $this->image->all();
        $userRole = Auth::user()->role;
        if($userRole=="author"){
            return view ("users/imagenes", compact("images"));
        }else{
            return Redirect::to('login');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showChapters()
    {
        $userRole = Auth::user()->role;
        if($userRole=="author"){
            return view ("users/capitulos");
        }else{
            return Redirect::to('login');
        }

    }

    public function showSearch(){
        $userRole = Auth::user()->role;
        if($userRole=="author"){
            return view("users/crearPost");
        }else{
            return Redirect::to('login');
        }

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
