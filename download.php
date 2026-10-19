<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/data.php';
require __DIR__ . '/includes/functions.php';

$path = cv_path($site);
$tipe = ['pdf' => 'application/pdf',
         'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
$ext = $path ? strtolower(pathinfo($path, PATHINFO_EXTENSION)) : '';

if (!$path || !isset($tipe[$ext])) {
    http_response_code(404);
    exit('CV belum tersedia.');
}

// Catat jumlah unduhan (opsional, gagal pun tidak masalah)
@file_put_contents(__DIR__ . '/storage/unduhan.log',
    date('c') . "\t" . ($_SERVER['REMOTE_ADDR'] ?? '') . PHP_EOL, FILE_APPEND | LOCK_EX);

$slug = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($site['nama'])), '-') ?: 'cv';
header('Content-Type: ' . $tipe[$ext]);
header('Content-Disposition: attachment; filename="CV-' . $slug . '.' . $ext . '"');
header('Content-Length: ' . filesize($path));
header('X-Content-Type-Options: nosniff');
readfile($path);
