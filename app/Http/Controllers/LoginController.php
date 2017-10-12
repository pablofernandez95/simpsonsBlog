<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }


    public function showLogin(User $user)
    {
      /* $user = Auth::user();
        dd($user);
        if($user != null){
        return View ('login');
        }else{
            return view('home');
        }
*/

    return view('/login');


    }

    public function doLogin(Request $request)
    {
           if(Auth::attempt(['email'=>$request['email'], 'password'=>$request ['password']])){
            switch(Auth::user()->role){
                case 'admin': return Redirect::to('admin');
                break;
                case 'author': return Redirect::to('users/blog');
                break;
                default: return ('error');
                    break;
            }
        }else{

        return Redirect::to('login');

        }
    }

    public function doLogout()
    {
       // AuthController::logout(); // log the user out of our application
        Auth::logout();
        return view ('login'); // redirect the user to the login screen
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
