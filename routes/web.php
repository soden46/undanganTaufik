<?php

use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WhatsAppController::class, 'handleWhatsAppParameter']);

Route::get('/taufik-patmi-from-taufik', [WhatsAppController::class, 'handleWhatsAppParameter'])->name('handle.whatsapp.parameter');
Route::get('/taufik-citra', [WhatsAppController::class, 'handleWhatsAppParameter'])->name('handle.whatsapp.parameter');

Route::get('/wa', [WhatsAppController::class, 'showWhatsAppForm'])->name('send.whatsapp.form');
Route::post('/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitations'])->name('send.invitations');

Route::get('/citra', [WhatsAppController::class, 'handleWhatsAppParameterCitra'])->name('handle.whatsapp.parameter.citra');
Route::get('/taufik-citra-from-citra', [WhatsAppController::class, 'handleWhatsAppParameterCitra'])->name('handle.whatsapp.parameter.citra');
Route::get('/citra/wa', [WhatsAppController::class, 'showWhatsAppFormCitra'])->name('send.whatsapp.form.citra');
Route::post('/citra/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitationsCitra'])->name('send.invitations.citra');

Route::get('/patmi', [WhatsAppController::class, 'handleWhatsAppParameterPatmi'])->name('handle.whatsapp.parameter.patmi');
Route::get('/taufik-Patmi-from-patmi', [WhatsAppController::class, 'handleWhatsAppParameterPatmi'])->name('handle.whatsapp.parameter.patmi');
Route::get('/patmi/wa', [WhatsAppController::class, 'showWhatsAppFormPatmi'])->name('send.whatsapp.form.patmi');
Route::post('/patmi/send-invitations', [WhatsAppController::class, 'sendWhatsAppInvitationsPatmi'])->name('send.invitations.patmi');
