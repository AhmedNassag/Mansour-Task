<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\FamilyController;
use App\Http\Controllers\Api\PosController;
use App\Http\Controllers\Api\ProdController;
use App\Http\Controllers\Api\RouteController;
use App\Http\Controllers\Api\SalesController;
use App\Http\Controllers\Api\SalesrepController;
use App\Http\Controllers\Api\SalesterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

//Auth routes
Route::group(['middleware' => 'api','prefix' => 'auth'], function()
{
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::post('/refresh', [AuthController::class, 'refresh']);
    // Route::get('/user-profile', [AuthController::class, 'userProfile']);
});



//User must be have token to be able to visit those routes
Route::group(['middleware' => 'JwtMiddleware'],function()
{
    
});
    //categories routes
    Route::get('/categories',[CategoryController::class,'index']);
    Route::get('/category/{id}',[CategoryController::class,'show']);
    Route::post('/categories',[CategoryController::class,'store']);
    Route::post('/categories/{id}',[CategoryController::class,'update']);
    Route::post('/category/{id}',[CategoryController::class,'destroy']);

    //companies routes
    Route::get('/companies',[CompanyController::class,'index']);
    Route::get('/company/{id}',[CompanyController::class,'show']);
    Route::post('/companies',[CompanyController::class,'store']);
    Route::post('/companies/{id}',[CompanyController::class,'update']);
    Route::post('/company/{id}',[CompanyController::class,'destroy']);

    //pos routes
    Route::get('/pos',[PosController::class,'index']);
    Route::get('/po/{id}',[PosController::class,'show']);
    Route::post('/pos',[PosController::class,'store']);
    Route::post('/pos/{id}',[PosController::class,'update']);
    Route::post('/po/{id}',[PosController::class,'destroy']);

    //salesreps routes
    Route::get('/salesreps',[SalesrepController::class,'index']);
    Route::get('/salesrep/{id}',[SalesrepController::class,'show']);
    Route::post('/salesreps',[SalesrepController::class,'store']);
    Route::post('/salesreps/{id}',[SalesrepController::class,'update']);
    Route::post('/salesrep/{id}',[SalesrepController::class,'destroy']);

    //salesters routes
    Route::get('/salesters',[SalesterController::class,'index']);
    Route::get('/salester/{id}',[SalesterController::class,'show']);
    Route::post('/salesters',[SalesterController::class,'store']);
    Route::post('/salesters/{id}',[SalesterController::class,'update']);
    Route::post('/salester/{id}',[SalesterController::class,'destroy']);

    //routes routes
    Route::get('/routes',[RouteController::class,'index']);
    Route::get('/route/{id}',[RouteController::class,'show']);
    Route::post('/routes',[RouteController::class,'store']);
    Route::post('/routes/{id}',[RouteController::class,'update']);
    Route::post('/route/{id}',[RouteController::class,'destroy']);

    //families routes
    Route::get('/families',[FamilyController::class,'index']);
    Route::get('/family/{id}',[FamilyController::class,'show']);
    Route::post('/families',[FamilyController::class,'store']);
    Route::post('/families/{id}',[FamilyController::class,'update']);
    Route::post('/family/{id}',[FamilyController::class,'destroy']);

    //prods routes
    Route::get('/prods',[ProdController::class,'index']);
    Route::get('/prod/{id}',[ProdController::class,'show']);
    Route::post('/prods',[ProdController::class,'store']);
    Route::post('/prods/{id}',[ProdController::class,'update']);
    Route::post('/prod/{id}',[ProdController::class,'destroy']);

    //sales routes
    Route::get('/sales',[SalesController::class,'index']);
    Route::get('/sale/{id}',[SalesController::class,'show']);
    Route::post('/sales',[SalesController::class,'store']);
    Route::post('/sales/{id}',[SalesController::class,'update']);
    Route::post('/sale/{id}',[SalesController::class,'destroy']);
