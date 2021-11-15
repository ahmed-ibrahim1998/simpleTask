<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('classroom',function () {
    return \App\Models\Classroom::all();
});

Route::get('student',function () {
    return \App\Models\Student::with('classrooms')->get();
});

Route::get('student/{id}',function ($id) {
    return \App\Models\Student::find($id);
});
