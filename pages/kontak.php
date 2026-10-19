<?php $f = flash(); $old = $f['old'] ?? ['nama' => '', 'email' => '', 'subjek' => '', 'pesan' => '']; ?>
<section class="wadah bagian">
  <h1 class="judul-halaman">Kontak</h1>
  <p class="pengantar">Punya proyek atau lowongan? Kirim pesan, saya biasanya membalas dalam 1–2 hari kerja.</p>
  <div class="dua-kolom dua-kolom--kontak">
    <div class="kotak">
      <h3>Informasi</h3>
      <dl class="data data--tumpuk">
        <div><dt>Email</dt><dd><a class="tautan" href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a></dd></div>
        <div><dt>Telepon</dt><dd><?= h($site['telepon']) ?></dd></div>
        <div><dt>Lokasi</dt><dd><?= h($site['lokasi']) ?></dd></div>
      </dl>
      <p class="kontak__sosial">
        <?php foreach ($site['sosial'] as $nama => $link): ?><a class="tautan" href="<?= h($link) ?>" target="_blank" rel="noopener noreferrer"><?= h($nama) ?></a><?php endforeach; ?>
      </p>
      <?php if (cv_tersedia($site)): ?><p class="cv-blok"><a class="tombol" href="download.php">Unduh CV</a></p><?php endif; ?>
    </div>

    <form class="form" method="post" action="<?= url('kontak') ?>" novalidate>
      <?php if ($f): ?>
        <div class="notif notif--<?= h($f['tipe']) ?>" role="alert">
          <?php foreach ($f['pesan'] as $m): ?><p><?= h($m) ?></p><?php endforeach; ?>
        </div>
      <?php endif; ?>
      <input type="hidden" name="csrf" value="<?= h(csrf_token()) ?>">
      <div class="jebakan" aria-hidden="true"><label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
      <label>Nama<input type="text" name="nama" value="<?= h($old['nama']) ?>" required maxlength="80" autocomplete="name"></label>
      <label>Email<input type="email" name="email" value="<?= h($old['email']) ?>" required autocomplete="email"></label>
      <label>Subjek<input type="text" name="subjek" value="<?= h($old['subjek']) ?>" maxlength="120"></label>
      <label>Pesan<textarea name="pesan" rows="6" required maxlength="2000"><?= h($old['pesan']) ?></textarea></label>
      <button class="tombol tombol--utama" type="submit">Kirim pesan</button>
    </form>
  </div>
</section>
