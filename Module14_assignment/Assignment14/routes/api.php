<?php

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/user',[AppController::class, 'UserName']);

Route::post('/useragent',[AppController::class,'UserAgent']);

Route::get('/query',[AppController::class,'ApiEndpoint']);

Route::get('/jsonresponse',[AppController::class,'JsonResponse']);

Route::post('/upload',[AppController::class,'FileUploads']);

Route::post('/setcookie', [AppController::class, 'SetCookie']);

// Question 7
Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Email must not be empty!";
    }
});