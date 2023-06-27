<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Events;

class HomeController extends Controller
{
    public function index()
    {

         $iterm_data=Events::all();
        return view("home",compact("iterm_data"));

    }

    public function redirects()
    {





        $usertype=Auth::user()->usertype;


        if($usertype=='1')
        {
            return view('admin.admininhome');
        }
        else
        {

            return view('home');
        }
    }






}
