@extends('layouts.app')

@section('title', 'Ide Agentic AI')

@section('content')

<div class="panel">
    <h1>Platform Agentic AI &mdash; {{ $tema }}</h1>
    @if($isDefault)
    <p style="color:var(--muted);font-size:0.85rem;">Belum ada tema dipilih, menampilkan tema default.</p>
    @endif
    <p>{{ $deskripsi }}</p>
</div>

<div class="panel">
    <h2>Coba Tema Lain</h2>
    <form class="mini" onsubmit="pilihTema(event)">
        <select id="temaInput">
            <option value="traceability">Traceability</option>
            <option value="edukasi">Edukasi</option>
            <option value="organisasi">Organisasi</option>
            <option value="keuangan">Keuangan</option>
        </select>
        <button type="submit">Lihat</button>
    </form>
    <p style="margin-top:14px;font-size:0.85rem;">
        Atau lihat <a href="{{ route('agent.ide') }}">tema default (tanpa parameter)</a>.
    </p>
</div>

<script>
function pilihTema(event) {
    event.preventDefault();
    const tema = document.getElementById('temaInput').value;
    const base = "{{ route('agent.ide', ['tema' => 'TEMAPLACEHOLDER']) }}";
    window.location.href = base.replace('TEMAPLACEHOLDER', tema);
}
</script>
@endsection
