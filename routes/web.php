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
   /* $text = $response["message"]["text"];;
    $chat_id = $response["message"]["chat"]["id"];
    $reply_markup = Telegram::replyKeyboardMarkup([
        'keyboard' => $keyboard,
        'resize_keyboard' => true,
        'one_time_keyboard' => false
    ]);*/

    /* $response = Telegram::sendPhoto([
        'chat_id' => $chat_id,
        'photo' => 'https://turboportal.ru/uploads/posts/2014-01/1388767951__.jpg',
        'caption' => 'Some caption'
    ]);*/

    /*$url = "https://68.media.tumblr.com/6d830b4f2c455f9cb6cd4ebe5011d2b8/tumblr_oj49kevkUz1v4bb1no1_500.jpg";
    $telegram->sendPhoto([ 'chat_id' => $chat_id, 'photo' => $url, 'caption' => "Описание." ]);
    $response1  = Telegram::sendPhoto([
        'chat_id' => $chat_id,
        'photo' => $url,
        'caption' => 'Some caption'

    ]);*/




    $response = Telegram::sendDocument([
        'chat_id' => '508562772',
        'document' => 'https://swd-oil.ru/components/com_jshopping/files/demo_products/RU_-_PDS_-_Primol_GDX_15W-40.pdf',
        'caption' => 'PDF',
    ]);
    /*  $response = Telegram::sendMessage([
        'chat_id' =>$chat_id,
        'text' => 'ёбаный в рот эти ваши боты'.$text.'\n https://www.youtube.com/watch?v=Fw_jxuV82Ew',
        'reply_markup' => $reply_markup
    ]);*/



});






// Example of POST Route:
Route::post('/1215643909:AAHu_E1TBMkFAsD4f9dbKejEu2r99mSl2j8/webhook', function () {

    return 'ok';
});