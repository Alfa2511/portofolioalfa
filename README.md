# Portofolio PHP Native

## Menjalankan
1. Pasang PHP 8.0+ (atau XAMPP/Laragon).
2. Jalankan di folder proyek:  php -S localhost:8000
3. Buka http://localhost/portofolio/

## Mengubah isi
Semua teks (nama, proyek, pendidikan, pengalaman, kontak) ada di config/data.php.
Foto: taruh di assets/img/ lalu isi 'foto'. Gambar proyek: isi 'gambar' pada tiap proyek.

## Pesan masuk
Pesan dari form kontak tersimpan di storage/pesan.jsonl (satu pesan per baris).
Folder storage/ sudah diproteksi .htaccess (Apache). Di Nginx, blokir akses ke folder ini lewat konfigurasi server.
Isi 'email_tujuan' di data.php jika ingin pesan dikirim juga ke email (butuh mail() aktif di hosting).

## Unduh CV
1. Taruh CV Anda (PDF atau DOCX) di folder assets/cv/.
2. Sesuaikan 'cv_file' di config/data.php, misalnya 'assets/cv/cv-budi.pdf'.
   File contoh assets/cv/cv-nama-anda.pdf harus diganti dengan CV asli Anda.
Tombol "Unduh CV" muncul di Beranda, Tentang Saya, dan Kontak selama file ada. Kosongkan 'cv_file' untuk menyembunyikannya.
Jumlah unduhan tercatat di storage/unduhan.log.

## Mode gelap / terang
Tombol bulan/matahari ada di pojok kanan atas. Pilihan pengunjung tersimpan di browser;
jika belum memilih, situs mengikuti pengaturan tema perangkat. Warna diatur lewat variabel di assets/css/style.css
(blok :root[data-tema="gelap"]).
