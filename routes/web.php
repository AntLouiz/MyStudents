<?php

use App\Events\eventTrigger;

Route::resource('students', 'StudentController');

Route::get('/', function () {
    return view('index');
});