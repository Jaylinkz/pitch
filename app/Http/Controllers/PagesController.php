<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('pages/index');
    }

    public function cases(){
        return view('pages/cases');     // returns a view for all cases in blog format
    }
    public function show(){
        return view('pages/show');    // returns a single post/reported case in a single page
    }

    public function subadmin(){
        return view('sub');
    }
}
