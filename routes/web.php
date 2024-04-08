<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $users = DB::select("SELECT * FROM users");
    return view('app', ['users' => $users]);
});

Route::get('/validation', function () {
    throw new App\Exceptions\ValidationError('invalid input');
});
