<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Report;
use App\Models\User;

class HomeController extends Controller
{
public function index(){
$role = Auth::user()->role;
$notifications = auth()->user()->unreadNotifications;
$reports = Report::orderBy("id","DESC")->get()->take(6);
$users = User::where('role','2')->get();


if($role == '1'){
    return view('Superadmin.home',compact('users'));
}

return view('NGO.home',compact('reports'));
}
}


