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

require("admin.php");

Route::namespace("EndUser")->group(function(){
    Route::get('/', 'PageController@index')->name('page.index');

    $prefix = "cua-hang";
    $controller = "shop";
    Route::prefix($prefix)->name($controller . ".")->group(function () use ($controller){
        $controllerName = ucfirst($controller) . "Controller@";
        Route::get("/", $controllerName . "index")->name("index");
        Route::get("danh-muc={slug}", $controllerName . "showProductByCategory")->name("showProductByCategory");
    });

});

