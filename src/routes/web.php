<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

route::get('products', [ProductController::class, 'products']);
route::get('register', [ProductController::class, 'register']);
route::post('product/register', [ProductController::class, 'store']);
route::get('/product/{id}', [ProductController::class, 'dateil']);
// route::get('dateil',[ProductController::class,'content']);