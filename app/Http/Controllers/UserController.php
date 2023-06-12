<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showSignupPage()
    {
        return view('layout/signup');
    }

   
    public function Show_user_dash()
    {
        return view('layout/user_dash');
    }

    public function Show_user_apply()
    {
        return view('layout/user_apply');
    }

    public function Show_employer_post()
    {
        return view('layout/employer_post');
    }

    public function Show_employer_dash()
    {
        return view('layout/employer_dash');
    }

    public function Show_employer_postedjob()
    {
        return view('layout/employer_postedjob');
    }



}
