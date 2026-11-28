@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <p><label>Nama</label><br><input type="text" name="name" value="{{ old('name', $user->name) }}" required></p>
        <p><label>Email</label><br><input type="email" name="email" value="{{ old('email', $user->email) }}" required></p>
        <p><label>Password <small>(Kosongkan jika tidak ingin diubah)</small></label><br><input type="password" name="password"></p>
        <p>
            <label>Role</label><br>
            <select name="role" required>
                <option value="petugas" {{ old('role', $user->role) == 'petugas' ? 'selected' : '' }}>Petugas</option>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </p>
        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('users.index') }}">Kembali</a>
    </form>
@endsection