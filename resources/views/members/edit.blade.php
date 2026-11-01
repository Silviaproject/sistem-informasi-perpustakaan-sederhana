
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
</head>
<body>
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
