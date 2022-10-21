<?php

use App\Http\Controllers\productController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

// Route::get('product',[productController::class, 'product']);

Route::resource('product', productController::class);
Route::get('product/soft/delete/{id}','productController@softDelete')->name('soft.delete');