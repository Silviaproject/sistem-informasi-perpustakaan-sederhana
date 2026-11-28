<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
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

        <a href="{{ route('categories.index') }}">Kategori</a> |
        <a href="{{ route('books.index') }}">Buku</a> |
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
</body>
</html>