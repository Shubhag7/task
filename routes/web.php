<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function (Request $request) {

    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    if($request->session()->exists('email')){

        return view('login');
    }else{

        $request->session()->put('email', $request->email);
        return redirect('/Home');
    }
});

Route::get('/Home', function (Request $request) {
    if($request->session()->exists('email')){

        return view('Home');
    }
});

Route::get('/logout', function () {
    session()->forget('email');
    return redirect('/login');
})->name('logout');