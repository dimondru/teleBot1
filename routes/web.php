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

Route::post('/','BotController@incoming');

Route::get('/','HomeController@index');
// Example of POST Route:
Route::post('/1215643909:AAHu_E1TBMkFAsD4f9dbKejEu2r99mSl2j8/webhook', function () {

    return 'ok';
});
