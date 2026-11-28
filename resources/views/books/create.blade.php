@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<h2>Tambah Buku Baru</h2>
<a href="{{ route('books.index') }}">Kembali</a>
<br><br>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label for="category_id">Kategori Buku</label><br>
        <select name="category_id" id="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id') <p style="color:red;">{{ $message }}</p> @enderror
    </div><br>

    <div>
        <label for="title">Judul Buku</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title') <p style="color:red;">{{ $message }}</p> @enderror
    </div><br>

    <div>
        <label for="author">Penulis</label><br>
        <input type="text" name="author" id="author" value="{{ old('author') }}">
        @error('author') <p style="color:red;">{{ $message }}</p> @enderror
    </div><br>

    <div>
        <label for="year">Tahun Terbit</label><br>
        <input type="number" name="year" id="year" value="{{ old('year') }}">
        @error('year') <p style="color:red;">{{ $message }}</p> @enderror
    </div><br>

    <div>
        <label for="stock">Stok Buku</label><br>
        <input type="number" name="stock" id="stock" value="{{ old('stock', 0) }}">
        @error('stock') <p style="color:red;">{{ $message }}</p> @enderror
    </div><br>

    <button type="submit">Simpan</button>
</form>
@endsection