@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<h2>Edit Kategori</h2>
<a href="{{ route('categories.index') }}">Kembali</a>
<br><br>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Nama Kategori:</label><br>
    <input type="text" name="name" value="{{ old('name', $category->name) }}" required><br><br>
    
    <button type="submit">Update</button>
</form>
@endsection