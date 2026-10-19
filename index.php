<?php
declare(strict_types=1);
session_start();
$site = require __DIR__ . '/config/data.php';
require __DIR__ . '/includes/functions.php';

$menu = ['beranda' => 'Beranda', 'tentang' => 'Tentang Saya', 'portofolio' => 'Portofolio',
         'pendidikan' => 'Pendidikan', 'pengalaman' => 'Pengalaman', 'kontak' => 'Kontak'];

$aktif = $_GET['page'] ?? 'beranda';
if (!is_string($aktif) || !isset($menu[$aktif])) { http_response_code(404); $aktif = '404'; }

if ($aktif === 'kontak' && $_SERVER['REQUEST_METHOD'] === 'POST') proses_kontak($site);

$judulHalaman = $aktif === '404' ? 'Halaman tidak ditemukan' : $menu[$aktif];
require __DIR__ . '/includes/header.php';
require __DIR__ . '/pages/' . $aktif . '.php';
require __DIR__ . '/includes/footer.php';
