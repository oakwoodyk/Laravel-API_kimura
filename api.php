<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/v1/exercise', ExerciseController::class);

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Good Morning'
    ], 200);
});