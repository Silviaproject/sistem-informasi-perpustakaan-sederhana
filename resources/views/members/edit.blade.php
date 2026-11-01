<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
</head>
<body>
    <h2>Edit Data Anggota</h2>
    <a href="{{ route('anggota.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kode Anggota:</label><br>
        <input type="text" name="kode_anggota" value="{{ $anggota->kode_anggota }}" required><br><br>

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" value="{{ $anggota->nama }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $anggota->email }}" required><br><br>

        <label>No HP/WhatsApp:</label><br>
        <input type="text" name="no_hp" value="{{ $anggota->no_hp }}" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" rows="3" required>{{ $anggota->alamat }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>