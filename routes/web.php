<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function (Request $request) {
    return view('admin.home', [
        'url_path' => $request->path()
    ]);
});

Route::get('/product/list', function(Request $request) {
    return view('admin.product', [
        'url_path' => $request->path()
    ]);
});

Route::get('/product/new', function(Request $request) {
    return view('admin.product-new', [
        'url_path' => $request->path()
    ]);
});

Route::get('/finance/chart', function(Request $request) {
    return view('admin.chart', [
        'url_path' => $request->path()
    ]);
});
