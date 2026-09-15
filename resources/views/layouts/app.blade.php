<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Profil Akademis') &mdash; Muhammad Nabil Fauzan</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&display=swap" rel="stylesheet">
<style>
    :root {
        --navy: #0b1830;
        --navy-soft: #1c2c52;
        --teal: #14918a;
        --gold: #cf9a41;
        --bg: #f2f4f8;
        --panel: #ffffff;
        --line: #e3e7f0;
        --text: #232838;
        --muted: #6b7280;
        --font-serif: 'Fraunces', Georgia, serif;
    }
    * { box-sizing: border-box; }
    body {
        margin: 0;
        font-family: -apple-system, "Segoe UI", system-ui, Roboto, sans-serif;
        background: var(--bg);
        color: var(--text);
        line-height: 1.68;
    }
    a { color: var(--teal); }
    header { background: var(--navy); color: #eef1f8; padding: 22px 32px; }
    .header-inner {
        max-width: 780px; margin: 0 auto;
        display: flex; justify-content: space-between; align-items: center;
        flex-wrap: wrap; gap: 10px 24px;
    }
    header .site-title { font-family: var(--font-serif); font-weight: 500; font-size: 1.2rem; letter-spacing: 0.01em; }
    nav a { color: #b9c4e0; text-decoration: none; margin-left: 20px; font-size: 0.88rem; }
    nav a:hover { color: #fff; }
    main { max-width: 780px; margin: 0 auto; padding: 52px 24px 70px; }
    h1 { font-family: var(--font-serif); color: var(--navy); font-size: 2.1rem; font-weight: 500; margin: 0 0 8px; line-height: 1.25; }
    h2 { font-family: var(--font-serif); color: var(--navy); font-size: 1.3rem; font-weight: 500; margin: 0 0 12px; }
    p { margin: 0 0 15px; max-width: 62ch; }
    .panel { background: var(--panel); border: 1px solid var(--line); border-radius: 12px; padding: 30px 32px; margin-bottom: 24px; }
    .hero { display: flex; gap: 24px; align-items: center; border-top: 3px solid var(--gold); box-shadow: 0 14px 32px rgba(11, 24, 48, 0.09); }
    .hero-text { min-width: 0; }
    .hero-text h1 { margin-bottom: 6px; }
    .avatar-photo {
        width: 88px; height: 88px; min-width: 88px; border-radius: 50%;
        object-fit: cover; box-shadow: 0 0 0 3px #fff, 0 0 0 5px var(--line);
    }
    .tagline { color: var(--muted); font-size: 0.95rem; margin: 0 0 8px; }
    .contact-line { display: flex; gap: 6px 18px; flex-wrap: wrap; color: var(--muted); font-size: 0.86rem; margin: 0; }
    table { width: 100%; border-collapse: collapse; }
    table td { padding: 11px 4px; border-bottom: 1px solid var(--line); vertical-align: top; }
    table td:first-child { color: var(--muted); width: 40%; }
    table tr:last-child td { border-bottom: none; }
    .links { display: flex; flex-direction: column; gap: 0; margin-top: 6px; }
    .links a { display: block; padding: 16px 2px; border-bottom: 1px solid var(--line); text-decoration: none; color: var(--text); }
    .links a:last-child { border-bottom: none; }
    .links a .t { font-family: var(--font-serif); color: var(--navy); font-weight: 500; font-size: 1.08rem; display:block; }
    .links a .d { color: var(--muted); font-size: 0.88rem; margin-top: 2px; }
    .links a:hover .t { color: var(--teal); }

    .timeline-item { display: flex; gap: 16px; padding: 10px 0; border-bottom: 1px solid var(--line); flex-wrap: wrap; }
    .timeline-item:last-child { border-bottom: none; }
    .timeline-period { color: var(--muted); font-size: 0.85rem; min-width: 120px; }
    .timeline-name { font-weight: 600; }

    .entry { padding: 14px 0; border-bottom: 1px solid var(--line); }
    .entry:last-child { border-bottom: none; }
    .entry-head { display: flex; justify-content: space-between; gap: 12px; flex-wrap: wrap; }
    .entry-role { font-weight: 600; color: var(--navy); }
    .entry-period { color: var(--muted); font-size: 0.85rem; white-space: nowrap; }
    .entry-place { color: var(--muted); font-size: 0.88rem; margin-top: 2px; }
    .entry-desc { margin: 8px 0 0; font-size: 0.92rem; }
    .entry.small { padding: 10px 0; }
    .entry.small .entry-role { font-size: 0.92rem; }

    .tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 4px; }
    .tag { background: #eef1f8; color: var(--navy-soft); font-size: 0.82rem; padding: 5px 12px; border-radius: 999px; font-weight: 500; }

    details { border-top: 1px solid var(--line); padding: 12px 0; }
    details:first-of-type { border-top: none; }
    summary { cursor: pointer; font-weight: 600; color: var(--navy); font-size: 0.95rem; list-style: none; }
    summary::-webkit-details-marker { display: none; }
    summary::before { content: '+ '; color: var(--teal); }
    details[open] summary::before { content: '\2212 '; }
    details > *:not(summary) { margin-top: 10px; }
    .plain-list { margin: 0; padding-left: 20px; font-size: 0.9rem; }
    .plain-list li { margin-bottom: 6px; }

    form.mini { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 6px; }
    input, select {
        padding: 10px 12px; border: 1px solid #ccd3e2; border-radius: 8px;
        font-size: 0.92rem; flex: 1; min-width: 150px; font-family: inherit; background: #fbfbfd;
    }
    input:focus, select:focus { outline: 2px solid var(--teal); outline-offset: 1px; }
    button {
        background: var(--navy); color: #fff; border: none; padding: 10px 20px;
        border-radius: 8px; cursor: pointer; font-size: 0.9rem; font-weight: 600; font-family: inherit;
    }
    button:hover { background: var(--navy-soft); }
    .alert { background: #fdecec; color: #a12626; padding: 13px 16px; border-radius: 8px; border-left: 3px solid #d64545; font-size: 0.9rem; }
    .result { background: #eefaf7; border-left: 3px solid var(--teal); padding: 16px 18px; border-radius: 8px; margin-top: 6px; font-size: 1.05rem; }
    .hint { color: var(--muted); font-size: 0.87rem; }
    footer { text-align: center; padding: 28px 24px; color: var(--muted); font-size: 0.78rem; }
    @media (max-width: 480px) {
        .hero { flex-direction: column; align-items: flex-start; }
        h1 { font-size: 1.7rem; }
    }
</style>
</head>
<body>
<header>
    <div class="header-inner">
        <div class="site-title">Nabil.</div>
        <nav>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('mahasiswa.profil', ['nrp' => '5025241024']) }}">Profil</a>
            <a href="{{ route('agent.ide') }}">Ide Agent AI</a>
            <a href="{{ route('ipk.hitung', ['ipk1' => '3.75', 'ipk2' => '3.80']) }}">Kalkulator IPK</a>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer>
    Departemen Teknik Informatika, FTEIC, Institut Teknologi Sepuluh Nopember, 2026<br>
    Tugas Mandiri PBKK, Pertemuan 2 (Instalasi &amp; Routing)
</footer>
</body>
</html>
