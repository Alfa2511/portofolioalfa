<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="light dark">
<script>
/* Pasang tema sebelum halaman digambar agar tidak berkedip */
(function(){var t;try{t=localStorage.getItem('tema')}catch(e){}
if(t!=='gelap'&&t!=='terang')t=matchMedia('(prefers-color-scheme: dark)').matches?'gelap':'terang';
document.documentElement.dataset.tema=t;})();
</script>
<title><?= h($judulHalaman) ?> · <?= h($site['nama']) ?></title>
<meta name="description" content="<?= h($site['profesi'] . ' – ' . $site['tagline']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=DM+Sans:wght@400;500;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<a class="lompat" href="#isi">Lompat ke konten</a>
<header class="topbar">
  <div class="wadah topbar__isi">
    <a class="logo" href="<?= url('beranda') ?>" aria-label="Beranda"><span class="logo__tanda">&lt;<?= h($site['inisial']) ?>/&gt;</span></a>
    <nav id="menu" class="menu" aria-label="Navigasi utama">
      <?php foreach ($menu as $slug => $label): ?>
        <a href="<?= url($slug) ?>" <?= $slug === $aktif ? 'class="aktif" aria-current="page"' : '' ?>><?= h($label) ?></a>
      <?php endforeach; ?>
    </nav>
    <div class="topbar__aksi">
      <button class="tema-tombol" type="button" aria-pressed="false" aria-label="Ganti ke mode gelap" title="Ganti tema">
        <svg class="ikon-bulan" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg>
        <svg class="ikon-matahari" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
      </button>
      <button class="menu-tombol" type="button" aria-expanded="false" aria-controls="menu" aria-label="Buka menu"><span></span><span></span></button>
    </div>
  </div>
</header>
<main id="isi">
