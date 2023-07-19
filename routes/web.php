<?php

use App\Jobs\TestJOb;
use App\Mail\TestMail;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    $data = DB::table('jobs')->get();
    return Inertia::render('Welcome',['data' => $data]);
});

Route::get('/test-mail', function () {
    dispatch(new TestJOb);

    $data = DB::table('jobs')->get();
    return Inertia::render('Welcome',['data' => $data]);
});

// Route::get('/test-mail', function () {
//     return Mail::to('asajib7654@gmial.com')->send(new TestMail);
// });




