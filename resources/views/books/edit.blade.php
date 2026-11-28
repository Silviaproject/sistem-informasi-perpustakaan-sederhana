<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>

    <a href="{{ route('buku.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kategori:</label><br>
        <select name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ $buku->kategori_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select><br><br>

        <label>Judul Buku:</label><br>
        <input type="text" name="judul" value="{{ $buku->judul }}" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required><br><br>

        <label>Stok Buku:</label><br>
        <input type="number" name="stok" value="{{ $buku->stok }}" min="0" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>