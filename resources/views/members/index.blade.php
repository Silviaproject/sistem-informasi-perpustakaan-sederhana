<<<<<<< HEAD
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Anggota Perpustakaan</title>
</head>
<body>
    <h1>Data Anggota Perpustakaan</h1>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p>
        <a href="{{ route('members.create') }}">+ Tambah Anggota</a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>{{ $members->firstItem() + $loop->index }}</td>
                    <td>{{ $member->member_code }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email ?? '-' }}</td>
                    <td>{{ $member->phone ?? '-' }}</td>
                    <td>
                        <a href="{{ route('members.show', $member) }}">Detail</a> |
                        <a href="{{ route('members.edit', $member) }}">Edit</a> |

                        <form action="{{ route('members.destroy', $member) }}"
                              method="POST" style="display:inline"
                              onsubmit="return confirm('Yakin ingin menghapus anggota ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data anggota.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p>{{ $members->links() }}</p>
</body>
</html>
=======
@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<h2>Daftar Anggota Perpustakaan</h2>

<a href="{{ route('members.create') }}">+ Tambah Anggota Baru</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($members as $index => $member)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $member->member_code }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>
                    <a href="{{ route('members.show', $member->id) }}">Detail</a> | 
                    <a href="{{ route('members.edit', $member->id) }}">Edit</a> | 
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus anggota ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data anggota.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
>>>>>>> origin/fitur/anggota-b
