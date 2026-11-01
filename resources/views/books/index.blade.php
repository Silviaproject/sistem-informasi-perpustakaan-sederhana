@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<h2>Daftar Buku</h2>

<a href="{{ route('books.create') }}">+ Tambah Buku Baru</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->category?->name ?? 'Belum ada kategori' }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->stock }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a> | 
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">Belum ada data buku.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection