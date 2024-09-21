<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () 
   // return view('welcome');
Route::get('/page',[AuthController::class,'firstpage']);
Route::get('/loginpage',[AuthController::class,'loginregist']);
Route::get('/loginpage1',[AuthController::class,'loginregist1']);
Route::get('/user',[AuthController::class,'user']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/store',[AuthController::class,'store'])->name('loginpage1');
Route::middleware(['web'])->group(function(){


Route::get('/dash',[AuthController::class,'login']);



Route::get('/homepage',[AuthController::class,'home']);
});



Route::middleware(['admin'])->group(function(){

   Route::get('/adminhomepage',[AdminController::class,'adminhomepage']);
   Route::get('/admin',[AdminController::class,'admin']);
   Route::get('/adminlogin',[AdminController::class,'adminlogin']);
   Route::get('/viewuser',[AdminController::class,'viewuser1']);
   Route::get('/deluser/{id}',[AdminController::class,'deluser']);
   Route::get('/edit/{id}',[AdminController::class,'edit']);
   Route::post('/update/{id}',[AdminController::class,'updates']);
   Route::get('/viewcompany',[AdminController::class,'viewcompanys']);
   Route::get('/addcompany',[AdminController::class,'addcompany1']);
   Route::post('/registercompany',[AdminController::class,'registercompany1']);
});


Route::middleware(['company'])->group(function(){

   Route::get('/company',[CompanyController::class,'company1']);
   Route::get('/companylogin',[CompanyController::class,'companylogin1']);
   Route::post('/companydet',[CompanyController::class,'details'])->name('companydetails');
   
   


});
