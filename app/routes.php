<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.main');
});
Route::get('test', function()
{
	return View::make('layouts.test');

});
Route::get('testchild', function()
{
	return View::make('layouts.testchild');
});

Route::get('resumes', function()
{
	return View::make('jobseekers.resumes');
});

Route::get('index1', function()
{
	return View::make('jobseekers.index1');
});