<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
</head>
<body>
    <h2>Edit Kategori</h2>
    <a href="{{ route('kategori.index') }}">Kembali</a>
    <br><br>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Kategori:</label><br>
        <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>