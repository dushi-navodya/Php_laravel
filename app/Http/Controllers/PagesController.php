<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome')->with
        ([
           'foo' => 'foodie',
           'tasks' =>[
               'Go to The Store',
               'Do php',
               'Do laravel'
           ]
        ]);
    }

    public function register(){
        return view('register');
    }

    public function about(){
        return view('about');
    }
}
