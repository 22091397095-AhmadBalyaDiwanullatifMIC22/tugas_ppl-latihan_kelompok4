<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h2>Registrasi Pengguna Baru</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Daftar</button>
        </div>
    </form>
</body>
</html>
