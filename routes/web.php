<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function ()
{  
    return view('home');
});

Route::get('/calendar', function ()
{  
    return view('calendar');
});

Route::get('foo',function(){
    return 'Hello fuck you';
});

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/pb', [PageController::class,'pb']);
/*Route::get('/products/{id}', [
    ProductController::class,
    'show'])->where('id','[0-9]+');*/

Route::resource('products',ProductController::class);
Route::resource('orders',OrderController::class);