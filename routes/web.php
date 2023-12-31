<?php

use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product_controller;
use App\Models\Products;

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



Route::view("/admin/add","pages.admin.add")->name('add');
Route::view("/admin/add-category","pages.admin.addCategory");
Route::post('/add-product',[Product_controller::class,'add_data'])->name('add_product');
Route::post('/add-category',[categoryController::class,'AddCategory']);
Route::get('/',[Product_controller::class, 'GetProducts']);
Route::get('/admin/add',[categoryController::class,'GetCategories']);
Route::get('/single-product/{id}',function($id){
    $item = Products::find($id);
    return view('pages.singleProduct',compact('item'));
});