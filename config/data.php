<?php
// ============================================================
// UBAH DATA DI FILE INI. Semua halaman membaca dari sini.
// ============================================================
return [
    'nama'      => 'Alfa Rizki Nuramadhan',
    'inisial'   => 'Alfa Rizki',
    'profesi'   => 'IT Programmer',
    'tagline'   => 'Saya membangun aplikasi web yang rapi, cepat, dan mudah dirawat.',
    'lokasi'    => 'Cirebon, Jawa Barat',
    'email'     => 'rizkyalfa2608@gmail.com',
    'telepon'   => '+62 895334213611',
    'email_tujuan' => 'rizkyalfa2608@gmail.com',   // isi email jika ingin pesan form juga dikirim lewat mail()
    'cv_file'   => 'assets/cv/cv-alfa-rizki.pdf', // letakkan CV (PDF/DOCX) di assets/cv/ lalu sesuaikan namanya; kosongkan jika belum ada
    'foto'      => 'assets/img/pas foto.jpeg',      // contoh: 'assets/img/foto.jpg' (kosong = tampil inisial)

    'sosial' => [
        'GitHub'   => 'https://github.com/alfa-rizki',
        'LinkedIn' => 'https://linkedin.com/in/Alfa Rizki Nuramadhan',
        'Instagram'=> 'https://instagram.com/_alfa.r',
    ],

    'tentang' => [
        'Saya seorang IT Programmer dengan fokus pada pengembangan aplikasi web berbasis PHP dan MySQL. Saya terbiasa mengubah kebutuhan bisnis menjadi sistem yang berjalan: dari perancangan database, pembuatan API, sampai tampilan yang nyaman dipakai.',
        'Saya suka kode yang bersih, terdokumentasi, dan mudah diteruskan oleh rekan satu tim. Saat tidak ngoding, saya belajar teknologi baru dan membaca dokumentasi.',
    ],

    'status' => 'Terbuka untuk pekerjaan & proyek freelance',

    'keahlian' => [
        'Backend'   => ['PHP Native' => 5, 'MySQL' => 4, 'REST API' => 4, 'Laravel' => 3],
        'Frontend'  => ['HTML & CSS' => 4, 'JavaScript' => 4, 'Bootstrap' => 4, 'Tailwind CSS' => 3],
        'Alat Kerja'=> ['Git & GitHub' => 4, 'Linux' => 3, 'Postman' => 4, 'Figma' => 3],
    ],

    'proyek' => [
        [
            'judul' => 'Sistem Informasi Ekstrakurikuler Olahraga',
            'kategori' => 'Website',
            'deskripsi' => 'Website ekstrakurikuler sekolah dengan berita, galeri, dan formulir pendaftaran siswa baru.',
            'teknologi' => ['PHP', 'MySQL', 'Bootstrap'],
            'warna' => '#3459F0', 'gambar' => 'assets/img/ekstrakurikuler.png', 'demo' => '#', 'kode' => '#',
        ],
        [
            'judul' => 'Aplikasi Kasir Toko',
            'kategori' => 'Web App',
            'deskripsi' => 'Kasir berbasis web dengan cetak struk, rekap penjualan harian, dan manajemen produk.',
            'teknologi' => ['PHP', 'MySQL', 'JavaScript'],
            'warna' => '#0E9F8E', 'gambar' => 'assets/img/kasir.png', 'demo' => '#', 'kode' => '#',
        ],
        [
            'judul' => 'LSP',
            'kategori' => 'Website',
            'deskripsi' => 'Website untuk mengelola data peserta yang ingin mengikuti sertifikasi dari LSP .',
            'teknologi' => ['PHP', 'Mysql'],
            'warna' => '#7A4DE8', 'gambar' => 'assets/img/lsp.png', 'demo' => '', 'kode' => '#',
        ],
        [
            'judul' => 'SOON',
            'kategori' => 'SOON',
            'deskripsi' => '-',
            'teknologi' => ['-'],
            'warna' => '#E0832B', 'gambar' => '', 'demo' => '#', 'kode' => '',
        ],
    ],

    'pendidikan' => [
        ['periode' => '2021 – 2026', 'judul' => 'S1 Teknik Informatika', 'tempat' => 'Universitas Muhammadiyah Cirebon',
         'detail' => 'IPK 3,45. Skripsi tentang PERANCANGAN SISTEM PENGELOLAAN DATA EKSTRAKURIKULER OLAHRAGA BERBASIS WEB (STUDI KASUS : SMAN 8 KOTA CIREBON).'],
        ['periode' => '2018 – 2021', 'judul' => 'SEKOLAH MENENGAH ATAS/SLTA ', 'tempat' => 'SMA NEGERI 8 KOTA CIREBON',
         'detail' => 'Di jurusan MIPA (Matematika dan Ilmu Pengetahuan Alam) SMA, siswa mempelajari keterkaitan antara konsep matematika mendalam dan fenomena alam secara ilmiah melalui empat mata pelajaran utama: Matematika Peminatan (fokus pada kalkulus, trigonometri lanjut, dan vektor), Fisika (mengkaji hukum gerakan, energi, listrik, dan gelombang), Kimia (mempelajari struktur zat, reaksi kimia, dan stoikiometri), serta Biologi (mengulas struktur sel, keanekaragaman hayati, anatomi manusia, hingga genetika dan evolusi).'],
    ],

    'sertifikasi' => [
        'Sertifikasi Karirnex Microsoft Excel Bootcamp (Beginner) (Penyelenggara, 2023)',
        'Sertifikasi BNSP Junior Web Developer by LPK TIKOM (Penyelenggara, 2026)',
    ],

    'pengalaman' => [
        ['periode' => '2025 – 2026', 'judul' => 'Programmer Web', 'tempat' => 'CV Waronge Orange',
         'poin' => ['Membangun dan merawat aplikasi internal berbasis PHP & MySQL.',
                    'Mengoptimalkan query sehingga waktu muat laporan turun signifikan.',
                    'Mengerjakan fitur baru dan perbaikan bug pada website klien.']],
        ['periode' => '2023 – 2025', 'judul' => 'Marketing', 'tempat' => 'UD Hikmat Sejahtera',
         'poin' => ['Mencapai target penjualan yang ditetapkan oleh perusahaan.',
                    'Membuat laporan penjualan dan analisis pasar secara berkala.',
                    'Tingkatkan pesanan berulang melalui strategi tindak lanjut dan layanan pelanggan yang optimal']],
        ['periode' => '2021 – 2023', 'judul' => 'Marketing Executive', 'tempat' => 'PT Kino Indonesia Tbk',
         'poin' => ['Pemantauan Distribusi & Tampilan Produk.', 
                    'Koordinasi dengan Tim Internal & Distributor',
                    'Analisis Pasar & Pesaing']],
    ],
];
