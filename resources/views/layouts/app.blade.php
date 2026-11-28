<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistem Informasi Perpustakaan')</title>
    <link rel="stylesheet" href="{{ asset('css/sage-wood.css') }}">
</head>
<body>
    @auth
    <nav class="navbar">
        <div class="nav-links">
            <span class="nav-brand">Perpustakaan</span>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>

            @if(auth()->user()->isAdmin())
                <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">Kelola User</a>
            @endif

            <a href="{{ route('members.index') }}" class="{{ request()->routeIs('members.*') ? 'active' : '' }}">Anggota</a>
            <a href="{{ route('categories.index') }}" class="{{ request()->routeIs('categories.*') ? 'active' : '' }}">Kategori</a>
            <a href="{{ route('books.index') }}" class="{{ request()->routeIs('books.*') ? 'active' : '' }}">Buku</a>
        </div>

        <div class="nav-user">
            <span>Halo, <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->role }})</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>
    @endauth

    <main class="container">
        <div class="content-card">
            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    <ul style="margin-left: 18px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>
</body>
</html>