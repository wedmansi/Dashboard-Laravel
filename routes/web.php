<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;

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



Route::get('/', [App\Http\Controllers\ItemsController::class, 'ShowItemGroup'])->name('welcome');



Route::get('/cpanel', function () {
    return view('dashboard.controlpanel')->name('dashboard.controlpanel');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addtocart/{id}', [App\Http\Controllers\ItemsController::class, 'AddtoCart'])->name('addtocart');

Route::get('/showproduct/{id}', [App\Http\Controllers\ItemsController::class, 'Showproduct'])->name('showproduct');

Route::get('/showallproduct', [App\Http\Controllers\ItemsController::class, 'ShowAllProduct'])->name('showallproduct');


Route::get('/itemgroup', [App\Http\Controllers\ItemsController::class, 'GetItemGroup'])->name('itemgroup');

Route::get('/checkout', [App\Http\Controllers\ItemsController::class, 'ShowCart'])->name('checkout')->middleware('auth');


//group routes

//Route::get('testapi', [ItemsController::class, 'testapi'])->name('testapi');



Route::get('/invoice', [DashboardController::class, 'Invoice'])->name('invoice');

Route::get('/customer', [DashboardController::class, 'Customer'])->name('customer');


Route::get('/cpanel', [DashboardController::class, 'Displayitem'])->name('controlpanel');
//->middleware('auth');

Route::get('/addgritem', [DashboardController::class, 'displayadditemsgroup'])->name('addgritem');

Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');


Route::post('save', [DashboardController::class, 'SaveGroupsItems'])->name('save');
Route::get('save', [DashboardController::class, 'SaveGroupsItems'])->name('save');

//////اجراءات القروب

Route::get('/delgr/{x}', [DashboardController::class, 'del'])->name('delgr');
Route::get('/editgr/{x}', [DashboardController::class, 'Edit'])->name('editgr');
Route::post('/updategr', [DashboardController::class, 'Update'])->name('updategr');



// item routes
Route::post('saveitem', [DashboardController::class, 'SaveItems'])->name('saveitem');
Route::get('saveitem', [DashboardController::class, 'SaveItems'])->name('saveitem');
Route::get('/del/{x}', [DashboardController::class, 'delitem'])->name('del');
Route::get('/edit/{x}', [DashboardController::class, 'Edititem'])->name('edit');
Route::post('/update', [DashboardController::class, 'Updateitem'])->name('update');
Route::get('/additem', [DashboardController::class, 'displayadditems'])->name('additem');





