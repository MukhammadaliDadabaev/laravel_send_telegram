<?php

use App\Helpers\Telegram;
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
//-------------> sendMessage, sendDocument
// Route::get('/', function (Telegram $telegram) {
//     $sendMessage = $telegram->sendMessage(261944697, 'Message');
//     $sendMessage = json_decode($sendMessage);
//     $telegram->sendDocument(261944697, 'shash.jpg', $sendMessage->result->message_id);
// });


// Route::get('/', function (Telegram $telegram) {
//     $buttons = [
//         'inline_keyboard' => [
//             [
//                 [
//                     'text' => 'button-1',
//                     'callback_data' => '1',
//                 ],
//                 [
//                     'text' => 'button-2',
//                     'callback_data' => '2',
//                 ],
//             ],
//             [
//                 [
//                     'text' => 'button-3',
//                     'callback_data' => '3',
//                 ]
//             ]
//         ]

//     ];
//     $sendMessage = $telegram->sendButtons(261944697, 'Knopka', json_encode($buttons));
//     $sendMessage = json_decode($sendMessage);
//     dd($sendMessage);
// });

Route::get('/', function (Telegram $telegram) {
    $buttons = [
        'inline_keyboard' => [
            [
                [
                    'text' => 'button-4',
                    'callback_data' => '4',
                ],
                [
                    'text' => 'button-5',
                    'callback_data' => '5',
                ],
            ],
            [
                [
                    'text' => 'button-6',
                    'callback_data' => '6',
                ]
            ]
        ]

    ];
    $sendMessage = $telegram->sendButtons(261944697, 'Knopka-edit', json_encode($buttons), 173);
    $sendMessage = json_decode($sendMessage);
    dd($sendMessage);
});