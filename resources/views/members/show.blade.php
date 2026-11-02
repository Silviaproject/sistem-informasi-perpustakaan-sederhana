<<<<<<< HEAD

=======
>>>>>>> origin/fitur/anggota-b
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Anggota</title>
</head>
<body>
<<<<<<< HEAD
    <h1>Detail Anggota</h1>

    <p><strong>Kode Anggota:</strong> {{ $member->member_code }}</p>
    <p><strong>Nama:</strong> {{ $member->name }}</p>
    <p><strong>Email:</strong> {{ $member->email ?? '-' }}</p>
    <p><strong>Telepon:</strong> {{ $member->phone ?? '-' }}</p>
    <p><strong>Alamat:</strong> {{ $member->address ?? '-' }}</p>

    <a href="{{ route('members.edit', $member) }}">Edit</a>
    <a href="{{ route('members.index') }}">Kembali ke Daftar</a>
</body>
</html>
=======
    <h2>Detail Anggota</h2>
    <a href="{{ route('anggota.index') }}">Kembali</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode Anggota</th>
            <td>{{ $anggota->kode_anggota }}</td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td>{{ $anggota->nama }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $anggota->email }}</td>
        </tr>
        <tr>
            <th>No HP</th>
            <td>{{ $anggota->no_hp }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $anggota->alamat }}</td>
        </tr>
    </table>
</body>
</html>
>>>>>>> origin/fitur/anggota-b
