<?php

use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WhatsAppController::class, 'handleWhatsAppParameter']);

Route::get('/taufik-citra', [WhatsAppController::class, 'handleWhatsAppParameter'])->name('handle.whatsapp.parameter');

Route::get('/wa', [WhatsAppController::class, 'showWhatsAppForm'])->name('send.whatsapp.form');
Route::post('/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitations'])->name('send.invitations');

Route::get('/citra', [WhatsAppController::class, 'handleWhatsAppParameter'])->name('handle.whatsapp.parameter.citra');
Route::get('/citra/taufik-citra', [WhatsAppController::class, 'handleWhatsAppParameter'])->name('handle.whatsapp.parameter.citra');
Route::get('/citra/wa', [WhatsAppController::class, 'showWhatsAppFormCitra'])->name('send.whatsapp.form.citra');
Route::post('/citra/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitationsCita'])->name('send.invitations.citra');
