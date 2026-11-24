@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Perpustakaan</h1>
    <p>Selamat datang, {{ auth()->user()->name }}! Anda login sebagai <strong>{{ auth()->user()->role }}</strong>.</p>
@endsection