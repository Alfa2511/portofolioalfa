<?php
function h(?string $s): string { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function url(string $page): string { return $page === 'beranda' ? 'index.php' : 'index.php?page=' . $page; }

function csrf_token(): string {
    if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}
function flash(?array $set = null): ?array {
    if ($set !== null) { $_SESSION['flash'] = $set; return null; }
    $f = $_SESSION['flash'] ?? null; unset($_SESSION['flash']); return $f;
}

function proses_kontak(array $site): void {
    $old = ['nama' => trim($_POST['nama'] ?? ''), 'email' => trim($_POST['email'] ?? ''),
            'subjek' => trim($_POST['subjek'] ?? ''), 'pesan' => trim($_POST['pesan'] ?? '')];
    $err = [];

    if (!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) $err[] = 'Sesi formulir kedaluwarsa. Muat ulang halaman lalu coba lagi.';
    if (!empty($_POST['website'])) { header('Location: ' . url('kontak')); exit; } // honeypot untuk bot
    if (mb_strlen($old['nama']) < 2 || mb_strlen($old['nama']) > 80) $err[] = 'Nama harus 2–80 karakter.';
    if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) $err[] = 'Format email belum benar.';
    if (mb_strlen($old['subjek']) > 120) $err[] = 'Subjek maksimal 120 karakter.';
    if (mb_strlen($old['pesan']) < 10 || mb_strlen($old['pesan']) > 2000) $err[] = 'Pesan harus 10–2000 karakter.';
    if (isset($_SESSION['terakhir_kirim']) && time() - $_SESSION['terakhir_kirim'] < 30) $err[] = 'Tunggu sebentar sebelum mengirim pesan lagi.';

    if ($err) { flash(['tipe' => 'error', 'pesan' => $err, 'old' => $old]); header('Location: ' . url('kontak')); exit; }

    $baris = json_encode($old + ['waktu' => date('c'), 'ip' => $_SERVER['REMOTE_ADDR'] ?? ''], JSON_UNESCAPED_UNICODE) . PHP_EOL;
    $ok = @file_put_contents(__DIR__ . '/../storage/pesan.jsonl', $baris, FILE_APPEND | LOCK_EX);

    if (!empty($site['email_tujuan'])) {
        $judul = 'Pesan portofolio: ' . str_replace(["\r", "\n"], ' ', $old['subjek'] ?: $old['nama']);
        $isi = "Dari: {$old['nama']} <{$old['email']}>\n\n{$old['pesan']}";
        @mail($site['email_tujuan'], $judul, $isi, 'Reply-To: ' . str_replace(["\r", "\n"], '', $old['email']));
    }

    if ($ok === false) { flash(['tipe' => 'error', 'pesan' => ['Pesan gagal disimpan. Pastikan folder storage/ bisa ditulis.'], 'old' => $old]); }
    else { $_SESSION['terakhir_kirim'] = time(); flash(['tipe' => 'ok', 'pesan' => ['Pesan terkirim. Terima kasih, saya akan membalas secepatnya.']]); }
    header('Location: ' . url('kontak')); exit;
}

// Lokasi file CV yang valid (harus berada di assets/cv/), atau null jika belum ada
function cv_path(array $site): ?string {
    $rel = $site['cv_file'] ?? '';
    $dir = realpath(__DIR__ . '/../assets/cv');
    $path = $rel !== '' ? realpath(__DIR__ . '/../' . $rel) : false;
    if (!$dir || !$path || !is_file($path) || strpos($path, $dir . DIRECTORY_SEPARATOR) !== 0) return null;
    return $path;
}
function cv_tersedia(array $site): bool { return cv_path($site) !== null; }
