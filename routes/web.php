<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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
    return view('welcome');
});
Route::get('/dashboard' ,[ShopController::class,'dashboard']);
Route::get('/appointment' ,[ShopController::class,'appointment']);
Route::get('/storeavailability' ,[ShopController::class,'storeavailability']);
Route::get('/create_mother_id' ,[ShopController::class,'create_mother_id']);
Route::get('/childId_income' ,[ShopController::class,'childId_income']);
Route::get('/childId_digital' ,[ShopController::class,'childId_digital']);
Route::get('/firm_motherID' ,[ShopController::class,'firm_motherID']);
Route::get('/motherID_transaction' ,[ShopController::class,'motherID_transaction']);
Route::get('/registration' ,[ShopController::class,'registration']);
Route::get('/login' ,[ShopController::class,'login']);