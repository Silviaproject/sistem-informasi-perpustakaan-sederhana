
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
</head>
<body>
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
