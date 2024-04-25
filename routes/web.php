<?php

use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('undangan.index');
});

Route::get('/taufik-citra?to={eventName}', function ($eventName) {
    return view('index', ['eventName' => $eventName]);
})->where('eventName', '.*');

Route::get('/wa', [WhatsAppController::class, 'showWhatsAppForm'])->name('send.whatsapp.form');
Route::post('/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitations'])->name('send.invitations');
