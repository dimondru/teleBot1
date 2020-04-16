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

Route::any('/', function () {


    $keyboard = [
        ['7', '8', '9'],
        ['4', '5', '6'],
        ['1', '2', '3'],
        ['0']
    ];



    $response =  Telegram::getWebhookUpdate();
    $text = $response["message"]["text"];;
    $chat_id = $response["message"]["chat"]["id"];
    $reply_markup = Telegram::replyKeyboardMarkup([
        'keyboard' => $keyboard,
        'resize_keyboard' => true,
        'one_time_keyboard' => false
    ]);



    $response = Telegram::sendDocument([
        'chat_id' => $chat_id,
        'document' => 'https://swd-oil.ru/components/com_jshopping/files/demo_products/RU_-_PDS_-_Primol_GDX_15W-40.pdf',
        'caption' => 'PDF',
    ]);
    $response = Telegram::sendMessage([
        'chat_id' => $chat_id,
        'text' => 'привет '.$chat_id,
        'reply_markup' => $reply_markup
    ]);


});

// Example of POST Route:
Route::post('/1215643909:AAHu_E1TBMkFAsD4f9dbKejEu2r99mSl2j8/webhook', function () {

    return 'ok';
});
