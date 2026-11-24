@extends('layouts.app')

@section('title', 'Kelola User')

@section('content')
    <h1>Data User (Admin & Petugas)</h1>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p style="color: red">{{ session('error') }}</p>
    @endif

    <p><a href="{{ route('users.create') }}">+ Tambah User</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $users->firstItem() + $loop->index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}">Edit</a>
                        @if ($user->id !== auth()->id())
                            | <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada data user.</td></tr>
            @endforelse
        </tbody>
    </table>
    <p>{{ $users->links() }}</p>
@endsection