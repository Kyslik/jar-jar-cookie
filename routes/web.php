<?php


Route::get('/', function () {
    Cookie::queue(Cookie::make('the-one', 'neo', 10));
    return view('welcome');
});
