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