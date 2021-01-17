<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlsController;
use App\Http\Controllers\DetailController;

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
Route::get('/', function(){
    return redirect('login');
});
Route::post('/urls', [UrlsController::class,'show'])->middleware(['auth']);


Route::get('/urls', [UrlsController::class,'index'])->middleware(['auth']);

require __DIR__.'/auth.php';
