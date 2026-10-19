<?php $kategori = array_values(array_unique(array_column($site['proyek'], 'kategori'))); ?>
<section class="wadah bagian">
  <h1 class="judul-halaman">Portofolio</h1>
  <p class="pengantar">Beberapa proyek yang pernah saya kerjakan.</p>
  <div class="filter" role="group" aria-label="Filter kategori">
    <button class="filter__btn aktif" data-filter="semua">Semua</button>
    <?php foreach ($kategori as $k): ?><button class="filter__btn" data-filter="<?= h($k) ?>"><?= h($k) ?></button><?php endforeach; ?>
  </div>
  <div class="grid-proyek">
    <?php foreach ($site['proyek'] as $p): include __DIR__ . '/../includes/kartu_proyek.php'; endforeach; ?>
  </div>
</section>
