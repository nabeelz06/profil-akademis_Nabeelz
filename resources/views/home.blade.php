@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="panel hero">
    <img class="avatar-photo" src="{{ asset('img/nabil.png') }}" alt="Muhammad Nabil Fauzan">
    <div class="hero-text">
        <h1>Halo, saya Nabil</h1>
        <p>
            Mahasiswa S1 Teknik Informatika angkatan 2024 di Institut Teknologi
            Sepuluh Nopember (ITS), Surabaya. Halaman ini adalah profil akademis
            mandiri yang dibangun murni dengan routing Laravel, sebagai Tugas
            Mandiri mata kuliah Pemrograman Berbasis Kerangka Kerja (PBKK) &mdash;
            Pertemuan 2: Instalasi Proyek Laravel &amp; Routing Dasar.
        </p>
    </div>
</div>

<h2>Jelajahi</h2>
<div class="panel">
    <div class="links">
        <a href="{{ route('mahasiswa.profil', ['nrp' => '5025241024']) }}">
            <span class="t">Detail Profil</span>
            <span class="d">Riwayat pendidikan, pengalaman kerja, organisasi, dan pencapaian &mdash; diambil lewat parameter NRP.</span>
        </a>
        <a href="{{ route('agent.ide') }}">
            <span class="t">Ide Agentic AI</span>
            <span class="d">Proyeksi ide platform Agentic AI untuk proyek akhir semester.</span>
        </a>
        <a href="{{ route('ipk.hitung', ['ipk1' => '3.75', 'ipk2' => '3.80']) }}">
            <span class="t">Kalkulator IPK</span>
            <span class="d">Rata-rata IPK dua semester, dihitung otomatis dari URL.</span>
        </a>
    </div>
</div>

@endsection
