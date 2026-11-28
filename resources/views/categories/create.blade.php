@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<h2>Tambah Kategori Baru</h2>
<a href="{{ route('categories.index') }}">Kembali</a>
<br><br>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    
    <label>Nama Kategori:</label><br>
    <input type="text" name="name" value="{{ old('name') }}" required><br><br>
    
    <button type="submit">Simpan</button>
</form>
@endsection