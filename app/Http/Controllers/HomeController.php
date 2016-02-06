<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;

class HomeController extends Controller
{
    public function index()
    {

    }

    public function showLogin()
    {
        if (Auth::admin()->check()){
            return Redirect::route('admin.index');
        }else{
            return view('admin.login');
        }
    }

    public function checkLogin(Request $request)
    {
        if (Auth::admin()->check()){
            return Redirect::route('admin.index');
        }

        $userData = array(
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        );

        if(Auth::admin()->attempt($userData, true)){
            return Redirect::route('admin.index');
        } else {
            return Redirect::route('admin.login');
        }
    }

    public function adminLogout(Request $request)
    {
        Auth::admin()->logout();
        return Redirect::route('admin.login');
    }
}
