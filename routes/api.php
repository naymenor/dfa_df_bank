<?php

use App\Http\Controllers\AssessmentReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankStatementInfoController;
use App\Models\User;
use App\Http\Controllers\EmiParameterController;
use App\Http\Controllers\CreditScoreParameterController;
use App\Http\Controllers\NIDVerificationController;
use App\Models\BankStatementInfo;

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
Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/bankst', BankStatementInfoController::class);
Route::group(["prefix"=>"dbl",'middleware' => ['auth:sanctum','roleChecker:admin,null,null']],function(){
    Route::resource('/emi', EmiParameterController::class);
    Route::resource('/CS', CreditScoreParameterController::class);
    Route::resource('/customer', AssessmentReportController::class);
    Route::post("/nid", [NIDVerificationController::class, "nid_verification"]);
    // Route::resource('/bankst', CreditScoreController::class); 
});

Route::any('{any}', function (Request $request) {
    return response()->json([
        'message' => 'Route not found'
    ], 404);
})->where('any', '.*');
