@extends('layouts.app')

@section('title', 'Kalkulator IPK')

@section('content')

<div class="panel">
    <h1>Rata-rata IPK Dua Semester</h1>
    @if(isset($error))
        <div class="alert">{{ $error }}</div>
    @else
        <table>
            <tr><td>IPK Semester 1</td><td>{{ $ipk1 }}</td></tr>
            <tr><td>IPK Semester 2</td><td>{{ $ipk2 }}</td></tr>
        </table>
        <div class="result">Rata-rata IPK: <strong>{{ $rataRata }}</strong></div>
    @endif
</div>

<div class="panel">
    <h2>Hitung Ulang</h2>
    <form class="mini" onsubmit="hitungIpk(event)">
        <input type="number" id="ipk1Input" step="0.01" min="0" max="4" placeholder="IPK Semester 1" required>
        <input type="number" id="ipk2Input" step="0.01" min="0" max="4" placeholder="IPK Semester 2" required>
        <button type="submit">Hitung</button>
    </form>
</div>

<script>
function hitungIpk(event) {
    event.preventDefault();
    const v1 = document.getElementById('ipk1Input').value.trim();
    const v2 = document.getElementById('ipk2Input').value.trim();
    const base = "{{ route('ipk.hitung', ['ipk1' => 'IPKSATU', 'ipk2' => 'IPKDUA']) }}";
    window.location.href = base.replace('IPKSATU', v1).replace('IPKDUA', v2);
}
</script>
@endsection
