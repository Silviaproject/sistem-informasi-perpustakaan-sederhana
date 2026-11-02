<<<<<<< HEAD

=======
>>>>>>> origin/fitur/anggota-b
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
</head>
<body>
<<<<<<< HEAD
    <h1>Edit Anggota</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('members.update', $member) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Kode Anggota</label><br>
            <input type="text" name="member_code"
                   value="{{ old('member_code', $member->member_code) }}" required>
        </p>

        <p>
            <label>Nama Anggota</label><br>
            <input type="text" name="name"
                   value="{{ old('name', $member->name) }}" required>
        </p>

        <p>
            <label>Email</label><br>
            <input type="email" name="email"
                   value="{{ old('email', $member->email) }}">
        </p>

        <p>
            <label>Nomor Telepon</label><br>
            <input type="text" name="phone"
                   value="{{ old('phone', $member->phone) }}">
        </p>

        <p>
            <label>Alamat</label><br>
            <textarea name="address">{{ old('address', $member->address) }}</textarea>
        </p>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('members.index') }}">Kembali</a>
    </form>
</body>
</html>
=======
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
>>>>>>> origin/fitur/anggota-b
