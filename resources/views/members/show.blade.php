
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Anggota</title>
</head>
<body>
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
