<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $some_var = "this is a variable";
        return view('welcome')->with('some_v', $some_var);
    }

    public function service(){
        return view('pages.services');
    }
}
