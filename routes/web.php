<?php

use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('undangan.index');
});

Route::get('/taufik-citra', [WhatsAppController::class, 'handleWhatsAppParameter'])->name('handle.whatsapp.parameter');

Route::get('/wa', [WhatsAppController::class, 'showWhatsAppForm'])->name('send.whatsapp.form');
Route::post('/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitations'])->name('send.invitations');
