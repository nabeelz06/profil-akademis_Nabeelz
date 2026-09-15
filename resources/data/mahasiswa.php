<?php

// Data profil untuk aplikasi Profil Akademis Mandiri.
// Dipisah dari routes/web.php supaya berkas rute tetap fokus pada logika routing.

return [
    '5025241024' => [
        'nama'      => 'Muhammad Nabil Fauzan',
        'nrp'       => '5025241024',
        'prodi'     => 'S1 Teknik Informatika',
        'angkatan'  => '2024',
        'fakultas'  => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)',
        'kampus'    => 'Institut Teknologi Sepuluh Nopember (ITS), Surabaya',
        'foto'      => 'img/nabil.png',
        'lokasi'    => 'Cilegon, Banten',
        'email'     => 'mhd.nbl.fzn@gmail.com',
        'instagram' => '@nabilfzaan',
        'bio'       => 'Berasal dari Cilegon, dengan kemampuan matematis-logis dan adaptabilitas yang kuat, serta terbiasa bekerja dalam tim. Tertarik pada manajemen organisasi, pengambilan keputusan, dan pengembangan sumber daya manusia, dengan semangat untuk terus bertumbuh dan berkontribusi secara optimal.',

        'pendidikan' => [
            ['periode' => '2019 - 2022', 'nama' => 'SMP Negeri 2 Cilegon'],
            ['periode' => '2022 - 2024', 'nama' => 'MAN 2 Kota Malang'],
            ['periode' => '2024 - Sekarang', 'nama' => 'Institut Teknologi Sepuluh Nopember'],
        ],

        'pengalaman_kerja' => [
            [
                'peran'     => 'Full Stack Engineer',
                'tempat'    => 'National Rare Earth Traceability Project (ITS & BIM) — Surabaya',
                'periode'   => 'Okt 2025 - Sekarang',
                'deskripsi' => 'Membangun sistem monitoring rantai pasok logam tanah jarang (LTJ) skala nasional untuk PT Timah Tbk menggunakan Laravel, SQL, dan Blockchain, termasuk integrasi Computer Vision, CCTV, RFID, dan otomasi N8N.',
            ],
            [
                'peran'     => 'ERP Programmer',
                'tempat'    => 'PT Surya Kreasi Pangan (BUMD) — Surabaya',
                'periode'   => 'Jan 2026 - Des 2026',
                'deskripsi' => 'Mengkustomisasi sistem ERP berbasis Odoo, mengintegrasikan AI pada modul Inventory, Purchasing, Sales, dan Accounting, serta membangun fitur CRM berbasis N8N.',
            ],
            [
                'peran'     => 'Website Administrator Intern',
                'tempat'    => 'Direktorat SDMO ITS — Surabaya',
                'periode'   => 'Nov 2025 - Des 2025',
                'deskripsi' => 'Mengelola website resmi Direktorat SDMO, memastikan publikasi konten harian dan keakuratan data internal.',
            ],
        ],

        'organisasi' => [
            ['peran' => 'Treasurer of the Laundry Division', 'tempat' => "Organisasi Santri Ma'had (OSIMA) — Malang", 'periode' => 'Nov 2022 - Nov 2023'],
            ['peran' => 'Member of Media and Information Department', 'tempat' => 'Himpunan Mahasiswa Islam (HMI) — Surabaya', 'periode' => 'Nov 2024 - Sekarang'],
            ['peran' => 'Vice President', 'tempat' => 'FORDA BADUY — Surabaya', 'periode' => 'Mei 2025 - Sekarang'],
            ['peran' => 'Competency Development Staff', 'tempat' => 'Society of Renewable Energy — Surabaya', 'periode' => 'Agu 2025 - Sekarang'],
        ],

        'keahlian' => ['Public Speaking', 'Teamwork', 'Communication', 'Time Management', 'Adaptive', 'Critical Thinking', 'Creativity', 'Attention to Detail'],
        'bahasa'   => ['Bahasa Indonesia (Native)', 'English (Advanced)'],
        'software' => ['Canva', 'Visual Studio Code', 'Microsoft Office'],

        'kepanitiaan' => [
            ['peran' => 'Treasurer, Event MANTION 2023', 'tempat' => 'OSIMA — Malang', 'periode' => 'Sep 2023'],
            ['peran' => 'Staff Divisi Logic, Schematics NLC', 'tempat' => 'Schematics — Surabaya', 'periode' => 'Mar 2025 - Sekarang'],
            ['peran' => 'Staff Guide, OKKBK 2025', 'tempat' => 'FTEIC ITS — Surabaya', 'periode' => 'Agu 2025'],
            ['peran' => 'Staff Event, Nalarfest 2025', 'tempat' => 'Surabaya', 'periode' => 'Agu - Nov 2025'],
            ['peran' => 'Chief Committee, RE-Knowable 1 2025', 'tempat' => 'Society of Renewable Energy — Surabaya', 'periode' => 'Okt 2025'],
            ['peran' => 'Master of Ceremony, RE-Knowable 2 2025', 'tempat' => 'Society of Renewable Energy — Surabaya', 'periode' => 'Nov 2025'],
            ['peran' => 'Event Division Expert Staff', 'tempat' => 'ILITS x FORDA BADUY — Surabaya', 'periode' => 'Des 2025 - Jan 2026'],
            ['peran' => 'Master of Ceremony, Career Bootcamp 2026', 'tempat' => 'Society of Renewable Energy — Surabaya', 'periode' => 'Jan 2026'],
        ],

        'pelatihan' => [
            ['nama' => 'Scientific Paper Writing Training (PKTI)', 'penyelenggara' => 'Institut Teknologi Sepuluh Nopember', 'periode' => 'Okt 2024'],
            ['nama' => 'Leadership Training 1 (LK1)', 'penyelenggara' => 'Himpunan Mahasiswa Islam (HMI)', 'periode' => 'Nov 2024'],
            ['nama' => 'Student Entrepreneurial Skills Training (LKMW)', 'penyelenggara' => 'Institut Teknologi Sepuluh Nopember', 'periode' => 'Nov 2024'],
            ['nama' => 'Student Management Skills Training (LKMM) Pre-TD FTEIC', 'penyelenggara' => 'FTEIC', 'periode' => 'Nov 2024'],
            ['nama' => 'Student Management Skills Training (LKMM) TD HMTC', 'penyelenggara' => 'HMTC', 'periode' => 'Jun 2025'],
            ['nama' => 'Bluecamp 2025 Scientific Writing Training (Best Scientific Paper)', 'penyelenggara' => 'HMTC', 'periode' => 'Okt 2025'],
            ['nama' => 'Upgrading Staff', 'penyelenggara' => 'Society of Renewable Energy (SRE ITS)', 'periode' => 'Nov 2025'],
        ],

        'prestasi' => [
            'Peserta KSN Matematika 2020 — Puspresnas (Nov 2020)',
            'Juara 1 Nurul Fikri Independence Day Mathematics Competition 2021 (Agu 2021)',
            'Peserta KSN Matematika 2021 — Puspresnas (Sep 2021)',
            'Peringkat 10 paralel akademik — SMPN 2 Kota Cilegon (Mei 2022)',
            'Medali Perak Olimpiade Matematika Siswa 2022 — Asosiasi Olimpiade Nusantara (Mei 2022)',
            'Certificate of Achievement — Lembaga Bahasa LIA (Jul 2022)',
            'Lulus SNBP 2024 Teknik Informatika ITS — SNPMB (Mar 2024)',
            'Lulus SMA lewat program akselerasi — MAN 2 Kota Malang (Jun 2024)',
            'Penerima Beasiswa Penuh S1 — Pemerintah Kota Cilegon (Okt 2024)',
            'Penerima Beasiswa Bakti BCA 2026 — Bank Central Asia (Des 2025)',
        ],
    ],
];
