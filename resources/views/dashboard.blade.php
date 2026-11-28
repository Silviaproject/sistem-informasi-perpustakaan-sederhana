@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Perpustakaan</h1>
    <p>Selamat datang, {{ auth()->user()->name }}! Anda login sebagai <strong>{{ auth()->user()->role }}</strong>.</p>

    <table border="1" cellpadding="12" cellspacing="0" style="margin-top: 16px;">
        <thead>
            <tr>
                <th>Jumlah Judul Buku</th>
                <th>Jumlah Stok Buku</th>
                <th>Jumlah Member</th>
                <th>Sedang Dipinjam</th>
            </tr>
        </thead>
        <tbody>
            <tr align="center">
                <td><strong>{{ $totalTitles ?? 0 }}</strong></td>
                <td><strong>{{ $totalStock ?? 0 }}</strong></td>
                <td><strong>{{ $totalMembers ?? 0 }}</strong></td>
                <td><strong>{{ $activeBorrowings ?? 0 }}</strong></td>
            </tr>
        </tbody>
    </table>
@endsection