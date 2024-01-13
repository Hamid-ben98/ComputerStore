<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputresController;
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

Route::get('/about',[StaticController::class , 'about'])->name('about');
Route::get('/contact',[StaticController::class , 'contact'])->name('contact');
Route::get('/welcom',[StaticController::class , 'welcome'])->name('home.index');

Route::resource('computers',ComputresController::class);


/*Route::get('/home', function () {
	$filter = request('nom');
	if (isset($filter))  {
    return 'Hello my border !!! <span style = "color : red"> '.strip_tags($filter).'</span>';
    }

    return 'Hello my borders !!! <span style = "color : red"> ALL <span>';
});


Route::get('/store/{category}/{item}', function ($cat = null , $item = null) {
   
    return "This is the category !!! <span style = \"color : red\"> {$cat}</span> and this is the item <span style = \"color : blue\">{$item}</span>";
   
});
*/