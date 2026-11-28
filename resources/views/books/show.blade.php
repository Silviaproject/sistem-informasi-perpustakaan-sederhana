@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h1>Detail Buku</h1>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-bottom: 16px;">
        <tr>
            <th align="left">Judul Buku</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th align="left">Penulis</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th align="left">Tahun Terbit</th>
            <td>{{ $book->year }}</td>
        </tr>
        <tr>
            <th align="left">Kategori</th>
            <td>{{ $book->category->name ?? '-' }}</td>
        </tr>
        <tr>
            <th align="left">Stok Tersedia</th>
            <td>{{ $book->stock }}</td>
        </tr>
    </table>

    <a href="{{ route('books.edit', $book) }}">Edit Buku</a> |
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection