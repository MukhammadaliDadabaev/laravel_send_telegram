<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebhookController;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// https://aliportfolio.uz/,
// https://api.telegram.org/bot5523403818:AAEoWPnWkxHn9FX0kbZAuL7AscjFR4z701c/setWebhook?url=https://aliportfolio.uz/webhook

Route::get('/', function (Order $order) {
    // $http = Http::get('https://api.telegram.org/bot5523403818:AAEoWPnWkxHn9FX0kbZAuL7AscjFR4z701c/getWebhookInfo?');
    // dd(json_decode($http->body()));
    return view('site.order', ['orders' => $order->active()->get()]);
});

// Route::group(['namespace' => 'App\Http\Controllers'], function () {
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/webhook', [WebhookController::class, 'index']);
    // Route::post('/post/store', 'PostController@store')->name('post.store');
// });