<section class="wadah bagian">
  <h1 class="judul-halaman">Pendidikan</h1>
  <ol class="garis">
    <?php foreach ($site['pendidikan'] as $e): ?>
      <li>
        <p class="garis__periode"><?= h($e['periode']) ?></p>
        <h3><?= h($e['judul']) ?></h3>
        <p class="garis__tempat"><?= h($e['tempat']) ?></p>
        <p><?= h($e['detail']) ?></p>
      </li>
    <?php endforeach; ?>
  </ol>
  <?php if (!empty($site['sertifikasi'])): ?>
    <h2>Sertifikasi & kursus</h2>
    <ul class="daftar"><?php foreach ($site['sertifikasi'] as $s): ?><li><?= h($s) ?></li><?php endforeach; ?></ul>
  <?php endif; ?>
</section>
