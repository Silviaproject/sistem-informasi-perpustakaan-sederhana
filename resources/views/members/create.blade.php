<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
</head>
<body>
    <h2>Tambah Anggota Baru</h2>
    <a href="{{ route('members.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        
        <label>Kode Anggota:</label><br>
        <input type="text" name="member_code" required><br><br>

        <label>Nama Anggota:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="address" required></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>