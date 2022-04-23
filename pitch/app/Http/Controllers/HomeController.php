<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
$role = Auth::user()->role;

if($role == '1'){
    return view('Superadmin.home');
}
return view('NGO.home');
}
}
