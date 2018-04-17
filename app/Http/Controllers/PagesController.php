<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to MyWeb';
        return view ('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Mysel';
        return view ('pages.about')->with('title', $title);
    }

}
