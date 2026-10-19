<article class="proyek" data-kategori="<?= h($p['kategori']) ?>">
  <div class="proyek__gambar" style="--warna:<?= h($p['warna']) ?>">
    <?php if ($p['gambar']): ?><img src="<?= h($p['gambar']) ?>" alt="Tangkapan layar <?= h($p['judul']) ?>" loading="lazy">
    <?php else: ?><span><?= h(mb_substr($p['judul'], 0, 2)) ?></span><?php endif; ?>
  </div>
  <div class="proyek__isi">
    <p class="proyek__kategori"><?= h($p['kategori']) ?></p>
    <h3><?= h($p['judul']) ?></h3>
    <p><?= h($p['deskripsi']) ?></p>
    <ul class="chip-daftar chip-daftar--kecil">
      <?php foreach ($p['teknologi'] as $t): ?><li class="chip"><?= h($t) ?></li><?php endforeach; ?>
    </ul>
    <!-- <p class="proyek__tautan">
      <?php if ($p['demo']): ?><a class="tautan" href="<?= h($p['demo']) ?>" target="_blank" rel="noopener noreferrer">Lihat demo</a><?php endif; ?>
      <?php if ($p['kode']): ?><a class="tautan" href="<?= h($p['kode']) ?>" target="_blank" rel="noopener noreferrer">Kode sumber</a><?php endif; ?>
    </p> -->
  </div>
</article>
