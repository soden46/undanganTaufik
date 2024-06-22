    @extends('undangan.app')
    @section('content')
    <div style="width: 50%; margin: auto; border: 1px solid #ccc; padding: 20px;">
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('send.invitations.patmi') }}">
            @csrf
            <label for="recipients">Nomor Penerima:</label><br>
            <input type="text" id="recipients" name="recipients" required><br>
            <label for="name">Nama Penerima:</label><br>
            <input type="text" id="name" name="name" required><br>
            <button type="submit" style="margin-top: 10px;">Kirim Pesan WhatsApp</button>
        </form>
    </div>
    @endsection