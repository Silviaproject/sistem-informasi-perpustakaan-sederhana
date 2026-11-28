@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<h2>Tambah Buku Baru</h2>
<a href="{{ route('books.index') }}">Kembali</a>
<br><br>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label>Kategori:</label><br>
    <select name="category_id" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Judul Buku:</label><br>
    <input type="text" name="title" value="{{ old('title') }}" required><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="author" value="{{ old('author') }}" required><br><br>

    <label>Tahun Terbit:</label><br>
    <input type="number" name="year" value="{{ old('year') }}" required><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stock" value="{{ old('stock', 0) }}" min="0" required><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection