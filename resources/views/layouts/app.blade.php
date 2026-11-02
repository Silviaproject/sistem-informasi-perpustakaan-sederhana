<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Library System</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
        <nav>
            <a href="{{ route('books.index') }}">Books</a> |
            <a href="{{ route('categories.index') }}">Categories</a> |
            <a href="{{ route('members.index') }}">Members</a>
        </nav>
        <hr>
    </header>

    <main>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>

    <footer>
        <hr>
        <p>© Library System - S1 Sistem Informasi UNSIKA</p>
    </footer>
</body>
</html>