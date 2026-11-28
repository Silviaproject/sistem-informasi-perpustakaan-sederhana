<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistem Informasi Perpustakaan')</title>
</head>
<body>
    <nav style="margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #ccc;">
        <strong>Perpustakaan</strong> |
        <a href="{{ route('dashboard') }}">Dashboard</a> |

        @if(auth()->user()->isAdmin())
            <a href="{{ route('users.index') }}">Kelola User</a> |
        @endif

        <a href="{{ route('members.index') }}">Anggota</a> |

        <span style="margin-left: 20px;">
            Halo, <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->role }})
        </span>
        <form action="{{ route('logout') }}" method="POST" style="display:inline; margin-left: 10px;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <main>
        @yield('content')
    </main>
=======
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
>>>>>>> origin/fitur/anggota-c
</body>
</html>