<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WhatsAppController extends Controller
{

    public function showWhatsAppForm()
    {
        return view('whatsapp.form');
    }

    public function sendWhatsAppInvitations(Request $request)
    {
        // Ambil daftar nomor WhatsApp penerima dan nama dari parameter request
        $recipients = $request->input('recipients');
        $eventName = $request->input('name');

        // Pastikan terdapat penerima dan nama acara
        if (empty($recipients) || empty($eventName)) {
            return back()->with('success', 'Nomor penerima atau nama penerima tidak boleh kosong');
        }

        // Ganti spasi dalam nama acara dengan tanda hubung (-)
        $eventNames = str_replace(' ', '-', $eventName);

        // Pesan yang akan dikirim
        $message = "Assalamualaikum Warahmatullahi Wabarakatuh\n\n";
        $message .= "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i $eventName untuk menghadiri acara .\n\n";
        $message .= "Berikut link undangan kami: https://undangan.syarifsoden.my.id/taufik-citra-from-taufik?to=$eventNames\n\n";
        $message .= "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n";
        $message .= "Mohon maaf perihal undangan hanya di bagikan melalui pesan ini.\n\n";
        $message .= "Dan agar selalu menjaga kesehatan bersama serta datang pada waktu yang telah ditentukan.*\n\n";
        $message .= "Terima kasih banyak atas perhatiannya.\n\n";
        $message .= "Wassalamualaikum Warahmatullahi Wabarakatuh";

        // Ubah nomor penerima yang diawali dengan "0" menjadi "62"
        if (substr($recipients, 0, 1) === '0') {
            $recipient = '62' . substr($recipients, 1);
        }

        // Kirim pesan ke nomor penerima
        return redirect("https://wa.me/{$recipient}?text=" . urlencode($message));

        return back()->with('success', 'Berhasil Mengirim Whatsapp');
    }

    public function handleWhatsAppParameter(Request $request)
    {
        // Ambil semua parameter dari URL
        $parameters = $request->query('to');

        // Periksa apakah $parameters adalah string sebelum melakukan pengolahan
        if (is_string($parameters)) {
            // Ubah tanda hubung menjadi spasi dalam nilai parameter
            $parameters = str_replace(
                ['-', '_', '.'],
                ' ',
                $parameters
            );
        }

        return view('undangan.handle', compact('parameters'));
    }

    public function showWhatsAppFormPAtmi()
    {
        return view('whatsapp.formpatmi');
    }

    public function sendWhatsAppInvitationsPatmi(Request $request)
    {
        // Ambil daftar nomor WhatsApp penerima dan nama dari parameter request
        $recipients = $request->input('recipients');
        $eventName = $request->input('name');

        // Pastikan terdapat penerima dan nama acara
        if (empty($recipients) || empty($eventName)) {
            return back()->with('success', 'Nomor penerima atau nama penerima tidak boleh kosong');
        }

        // Ganti spasi dalam nama acara dengan tanda hubung (-)
        $eventNames = str_replace(' ', '-', $eventName);

        // Pesan yang akan dikirim
        $message = "Assalamualaikum Warahmatullahi Wabarakatuh\n\n";
        $message .= "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i $eventName untuk menghadiri acara.\n\n";
        $message .= "Pernikahan Anak Kami\n\n";
        $message .= "Berikut link undangan kami: https://undangan.syarifsoden.my.id/taufik-citra-from-supatmi?to=$eventNames\n\n";
        $message .= "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n";
        $message .= "Mohon maaf perihal undangan hanya di bagikan melalui pesan ini.\n\n";
        $message .= "Terima kasih banyak atas perhatiannya.\n\n";
        $message .= "Wassalamualaikum Warahmatullahi Wabarakatuh";

        // Ubah nomor penerima yang diawali dengan "0" menjadi "62"
        if (substr($recipients, 0, 1) === '0') {
            $recipient = '62' . substr($recipients, 1);
        }

        // Kirim pesan ke nomor penerima
        return redirect("https://wa.me/{$recipient}?text=" . urlencode($message));

        return back()->with('success', 'Berhasil Mengirim Whatsapp');
    }

    public function handleWhatsAppParameterPatmi(Request $request)
    {
        // Ambil semua parameter dari URL
        $parameters = $request->query('to');

        // Periksa apakah $parameters adalah string sebelum melakukan pengolahan
        if (is_string($parameters)) {
            // Ubah tanda hubung menjadi spasi dalam nilai parameter
            $parameters = str_replace(
                ['-', '_', '.'],
                ' ',
                $parameters
            );
        }

        return view('undangan.handlepatmi', compact('parameters'));
    }

    public function showWhatsAppFormCitra()
    {
        return view('whatsapp.formcitra');
    }

    public function sendWhatsAppInvitationsCitra(Request $request)
    {
        // Ambil daftar nomor WhatsApp penerima dan nama dari parameter request
        $recipients = $request->input('recipients');
        $eventName = $request->input('name');

        // Pastikan terdapat penerima dan nama acara
        if (empty($recipients) || empty($eventName)) {
            return back()->with('success', 'Nomor penerima atau nama penerima tidak boleh kosong');
        }

        // Ganti spasi dalam nama acara dengan tanda hubung (-)
        $eventNames = str_replace(' ', '-', $eventName);

        // Pesan yang akan dikirim
        $message = "Assalamualaikum Warahmatullahi Wabarakatuh\n\n";
        $message .= "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i $eventName untuk menghadiri acara .\n\n";
        $message .= "Berikut link undangan kami: https://undangan.syarifsoden.my.id/taufik-citra-from-citra?to=$eventNames\n\n";
        $message .= "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n";
        $message .= "Mohon maaf perihal undangan hanya di bagikan melalui pesan ini.\n\n";
        $message .= "Dan agar selalu menjaga kesehatan bersama serta datang pada waktu yang telah ditentukan.*\n\n";
        $message .= "Terima kasih banyak atas perhatiannya.\n\n";
        $message .= "Wassalamualaikum Warahmatullahi Wabarakatuh";

        // Ubah nomor penerima yang diawali dengan "0" menjadi "62"
        if (substr($recipients, 0, 1) === '0') {
            $recipient = '62' . substr($recipients, 1);
        }

        // Kirim pesan ke nomor penerima
        return redirect("https://wa.me/{$recipient}?text=" . urlencode($message));

        return back()->with('success', 'Berhasil Mengirim Whatsapp');
    }

    public function handleWhatsAppParameterCitra(Request $request)
    {
        // Ambil semua parameter dari URL
        $parameters = $request->query('to');

        // Periksa apakah $parameters adalah string sebelum melakukan pengolahan
        if (is_string($parameters)) {
            // Ubah tanda hubung menjadi spasi dalam nilai parameter
            $parameters = str_replace(
                ['-', '_', '.'],
                ' ',
                $parameters
            );
        }

        return view('undangan.handlecitra', compact('parameters'));
    }
}
