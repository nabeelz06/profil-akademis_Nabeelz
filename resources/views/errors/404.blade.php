@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')

<div class="panel" style="text-align:center;">
    <h1>404 &mdash; Halaman Tidak Ditemukan</h1>
    <p style="margin:0 auto 18px;">Maaf, halaman atau data yang Anda cari tidak tersedia di aplikasi profil akademis ini.</p>
    <a href="{{ route('home') }}">&larr; Kembali ke Beranda</a>
</div>

@endsection
