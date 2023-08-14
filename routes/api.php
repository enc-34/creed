<?php

use App\Http\Controllers\API\v1\AccountController;
use App\Http\Controllers\API\v1\CampaignController;
use App\Http\Controllers\API\v1\ContactController;
use App\Http\Controllers\API\v1\FolderController;
use App\Http\Controllers\API\v1\ListContactBlogController;
use App\Http\Controllers\API\v1\User1Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*use function Ramsey\Uuid\v1;*/

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

Route::middleware('auth:sanctum')->get('/user1', function (Request $request) {
    return $request->user1();
});


Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\API\v1'],function(){
Route::apiResource('accounts', AccountController::class);
Route::apiResource('campaign', CampaignController::class);
Route::apiResource('contacts', ContactController::class);
Route::apiResource('folders', FolderController::class);
Route::apiResource('listcontactblogs', ListContactBlogController::class);
Route::apiResource('user1s', User1Controller::class);

});    
