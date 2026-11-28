@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<h2>Edit Data Buku</h2>
<a href="{{ route('books.index') }}">Kembali</a>
<br><br>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Kategori:</label><br>
    <select name="category_id" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Judul Buku:</label><br>
    <input type="text" name="title" value="{{ old('title', $book->title) }}" required><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="author" value="{{ old('author', $book->author) }}" required><br><br>

    <label>Tahun Terbit:</label><br>
    <input type="number" name="year" value="{{ old('year', $book->year) }}" required><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stock" value="{{ old('stock', $book->stock) }}" min="0" required><br><br>

    <button type="submit">Update</button>
</form>
@endsection