@extends('layouts.app')

@section('title', 'Detail Profil')

@section('content')

<div class="panel hero">
    <img class="avatar-photo" src="{{ asset($mhs['foto']) }}" alt="{{ $mhs['nama'] }}">
    <div class="hero-text">
        <h1>{{ $mhs['nama'] }}</h1>
        <p class="tagline">{{ $mhs['prodi'] }}, Angkatan {{ $mhs['angkatan'] }} &middot; NRP {{ $mhs['nrp'] }}</p>
        <div class="contact-line">
            <span>{{ $mhs['lokasi'] }}</span>
            <span><a href="mailto:{{ $mhs['email'] }}">{{ $mhs['email'] }}</a></span>
            <span>{{ $mhs['instagram'] }}</span>
        </div>
    </div>
</div>

<div class="panel">
    <h2>Tentang</h2>
    <p class="hint" style="margin-bottom:10px;">{{ $mhs['fakultas'] }} &mdash; {{ $mhs['kampus'] }}</p>
    <p>{{ $mhs['bio'] }}</p>
</div>

<div class="panel">
    <h2>Pendidikan</h2>
    <div>
        @foreach($mhs['pendidikan'] as $p)
        <div class="timeline-item">
            <span class="timeline-period">{{ $p['periode'] }}</span>
            <span class="timeline-name">{{ $p['nama'] }}</span>
        </div>
        @endforeach
    </div>
</div>

<div class="panel">
    <h2>Pengalaman Kerja</h2>
    @foreach($mhs['pengalaman_kerja'] as $pk)
    <div class="entry">
        <div class="entry-head">
            <span class="entry-role">{{ $pk['peran'] }}</span>
            <span class="entry-period">{{ $pk['periode'] }}</span>
        </div>
        <div class="entry-place">{{ $pk['tempat'] }}</div>
        <p class="entry-desc">{{ $pk['deskripsi'] }}</p>
    </div>
    @endforeach
</div>

<div class="panel">
    <h2>Organisasi</h2>
    @foreach($mhs['organisasi'] as $o)
    <div class="entry">
        <div class="entry-head">
            <span class="entry-role">{{ $o['peran'] }}</span>
            <span class="entry-period">{{ $o['periode'] }}</span>
        </div>
        <div class="entry-place">{{ $o['tempat'] }}</div>
    </div>
    @endforeach
</div>

<div class="panel">
    <h2>Keahlian &amp; Bahasa</h2>
    <div class="tags">
        @foreach($mhs['keahlian'] as $k)
        <span class="tag">{{ $k }}</span>
        @endforeach
    </div>
    <p class="hint" style="margin-top:14px;margin-bottom:0;">
        Bahasa: {{ implode(', ', $mhs['bahasa']) }}<br>
        Software: {{ implode(', ', $mhs['software']) }}
    </p>
</div>

<div class="panel">
    <h2>Rekam Jejak Lainnya</h2>
    <details>
        <summary>Kepanitiaan ({{ count($mhs['kepanitiaan']) }})</summary>
        @foreach($mhs['kepanitiaan'] as $k)
        <div class="entry small">
            <div class="entry-head">
                <span class="entry-role">{{ $k['peran'] }}</span>
                <span class="entry-period">{{ $k['periode'] }}</span>
            </div>
            <div class="entry-place">{{ $k['tempat'] }}</div>
        </div>
        @endforeach
    </details>
    <details>
        <summary>Pelatihan ({{ count($mhs['pelatihan']) }})</summary>
        @foreach($mhs['pelatihan'] as $p)
        <div class="entry small">
            <div class="entry-head">
                <span class="entry-role">{{ $p['nama'] }}</span>
                <span class="entry-period">{{ $p['periode'] }}</span>
            </div>
            <div class="entry-place">{{ $p['penyelenggara'] }}</div>
        </div>
        @endforeach
    </details>
    <details>
        <summary>Prestasi ({{ count($mhs['prestasi']) }})</summary>
        <ul class="plain-list">
            @foreach($mhs['prestasi'] as $pr)
            <li>{{ $pr }}</li>
            @endforeach
        </ul>
    </details>
</div>

<div class="panel">
    <h2>Cari NRP Lain</h2>
    <p class="hint">Masukkan NRP 10 digit untuk menguji parameter wajib dan validasi regex pada rute ini.</p>
    <form class="mini" onsubmit="cariProfil(event)">
        <input type="text" id="nrpInput" placeholder="Contoh: 5025241099" maxlength="10" required>
        <button type="submit">Cari</button>
    </form>
</div>

<script>
function cariProfil(event) {
    event.preventDefault();
    const nrp = document.getElementById('nrpInput').value.trim();
    const base = "{{ route('mahasiswa.profil', ['nrp' => '0000000000']) }}";
    window.location.href = base.replace('0000000000', nrp);
}
</script>
@endsection
