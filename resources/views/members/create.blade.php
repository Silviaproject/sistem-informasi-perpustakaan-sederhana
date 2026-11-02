<<<<<<< HEAD

=======
>>>>>>> origin/fitur/anggota-b
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
</head>
<body>
<<<<<<< HEAD
    <h1>Tambah Anggota</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <p>
            <label>Kode Anggota</label><br>
            <input type="text" name="member_code"
                   value="{{ old('member_code') }}" required>
        </p>

        <p>
            <label>Nama Anggota</label><br>
            <input type="text" name="name"
                   value="{{ old('name') }}" required>
        </p>

        <p>
            <label>Email</label><br>
            <input type="email" name="email"
                   value="{{ old('email') }}">
        </p>

        <p>
            <label>Nomor Telepon</label><br>
            <input type="text" name="phone"
                   value="{{ old('phone') }}">
        </p>

        <p>
            <label>Alamat</label><br>
            <textarea name="address">{{ old('address') }}</textarea>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('members.index') }}">Kembali</a>
    </form>
</body>
</html>
=======
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
>>>>>>> origin/fitur/anggota-b
