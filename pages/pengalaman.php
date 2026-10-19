<section class="wadah bagian">
  <h1 class="judul-halaman">Pengalaman</h1>
  <ol class="garis">
    <?php foreach ($site['pengalaman'] as $e): ?>
      <li>
        <p class="garis__periode"><?= h($e['periode']) ?></p>
        <h3><?= h($e['judul']) ?></h3>
        <p class="garis__tempat"><?= h($e['tempat']) ?></p>
        <ul class="daftar"><?php foreach ($e['poin'] as $po): ?><li><?= h($po) ?></li><?php endforeach; ?></ul>
      </li>
    <?php endforeach; ?>
  </ol>
</section>
