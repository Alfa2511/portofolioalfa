<section class="wadah bagian">
  <h1 class="judul-halaman">Tentang saya</h1>
  <div class="dua-kolom">
    <div class="foto">
      <?php if ($site['foto']): ?><img src="<?= h($site['foto']) ?>" alt="Foto <?= h($site['nama']) ?>">
      <?php else: ?><span><?= h($site['inisial']) ?></span><?php endif; ?>
    </div>
    <div class="teks">
      <?php foreach ($site['tentang'] as $par): ?><p><?= h($par) ?></p><?php endforeach; ?>
      <dl class="data">
        <div><dt>Nama</dt><dd><?= h($site['nama']) ?></dd></div>
        <div><dt>Profesi</dt><dd><?= h($site['profesi']) ?></dd></div>
        <div><dt>Lokasi</dt><dd><?= h($site['lokasi']) ?></dd></div>
        <div><dt>Email</dt><dd><a class="tautan" href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a></dd></div>
      </dl>
      <?php if (cv_tersedia($site)): ?>
        <p class="cv-blok"><a class="tombol tombol--utama" href="download.php">Unduh CV (<?= strtoupper(pathinfo($site['cv_file'], PATHINFO_EXTENSION)) ?>)</a></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="wadah bagian">
  <h2>Keahlian</h2>
  <div class="grid-keahlian">
    <?php foreach ($site['keahlian'] as $grup => $item): ?>
      <div class="kotak">
        <h3><?= h($grup) ?></h3>
        <ul class="skill">
          <?php foreach ($item as $nama => $lv): ?>
            <li><span><?= h($nama) ?></span>
              <span class="titik" role="img" aria-label="Level <?= (int)$lv ?> dari 5"><?php for ($i = 1; $i <= 5; $i++): ?><i class="<?= $i <= $lv ? 'isi' : '' ?>"></i><?php endfor; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>
