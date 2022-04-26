<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ReportMail;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ====================== NEW ROUTES ===========================
// ---------------- home route ---------------------
Route::get('/', 'PagesController@home');

// ------------------ cases(blog) route --------------------
Route::get('/cases', 'PagesController@cases')->name('cases');

// ----------------- show single case/post route -------------
Route::get('/show','PagesController@show')->name('show');

Route::get('/subadmin', 'PagesController@subadmin')->name('subadmin');


// ====================== INITIAL ROUTES ========================
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirects',[HomeController::class,'index']);

route::get('emailsend', function(){
    $mailData = [
        "Name" => "Musa Abdulahi",
        "contact" => "08079769699",
    ];
    Mail::to("jay@example.com")->send(new ReportMail($mailData));
    dd('mail sent successfully');
});
