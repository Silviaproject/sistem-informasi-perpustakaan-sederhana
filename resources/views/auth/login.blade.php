<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('css/sage-wood.css') }}">
</head>
<body class="login-page">
    <header class="login-header">
        Sistem Informasi Perpustakaan
    </header>

    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-card-header">
                <h2>Login Perpustakaan</h2>
            </div>

            <div class="login-card-body">
                @if($errors->any())
                    <div class="alert-error">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>