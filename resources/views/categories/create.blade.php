<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kategori</title>
</head>
<body>
    <h2>Tambah Kategori Baru</h2>
    <a href="{{ route('categories.index') }}">Kembali</a>
    <br><br>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label>Nama Kategori:</label><br>
        <input type="text" name="name" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>