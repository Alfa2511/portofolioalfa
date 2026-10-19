<section class="hero wadah">
  <div class="hero__teks">
    <p class="status"><span class="status__titik"></span><?= h($site['status']) ?></p>
    <h1>Halo, saya <?= h($site['nama']) ?>.<br><?= h($site['profesi']) ?>.</h1>
    <p class="pengantar"><?= h($site['tagline']) ?></p>
    <div class="aksi">
      <a class="tombol tombol--utama" href="<?= url('portofolio') ?>">Lihat portofolio</a>
      <a class="tombol" href="<?= url('kontak') ?>">Hubungi saya</a>
      <?php if (cv_tersedia($site)): ?><a class="tombol tombol--teks" href="download.php">Unduh CV</a><?php endif; ?>
    </div>
  </div>

  <div class="kode" aria-hidden="true">
    <div class="kode__bar"><i></i><i></i><i></i><span>programmer.php</span></div>
<pre><code><span class="c">&lt;?php</span>
<span class="k">$saya</span> = [
  <span class="s">'nama'</span>    =&gt; <span class="t">'<?= h($site['nama']) ?>'</span>,
  <span class="s">'peran'</span>   =&gt; <span class="t">'<?= h($site['profesi']) ?>'</span>,
  <span class="s">'stack'</span>   =&gt; [<span class="t">'PHP'</span>, <span class="t">'MySQL'</span>, <span class="t">'JS'</span>],
  <span class="s">'lokasi'</span>  =&gt; <span class="t">'<?= h($site['lokasi']) ?>'</span>,
  <span class="s">'siap_kerja'</span> =&gt; <span class="k">true</span>,
];

<span class="f">function</span> <span class="n">sapa</span>(<span class="k">$saya</span>) {
  <span class="f">return</span> <span class="t">"Mari bangun sesuatu."</span>;
}<span class="kursor"></span></code></pre>
  </div>
</section>

<section class="wadah bagian">
  <h2>Teknologi yang saya pakai</h2>
  <ul class="chip-daftar">
    <?php foreach ($site['keahlian'] as $grup): foreach ($grup as $nama => $lv): ?>
      <li class="chip"><?= h($nama) ?></li>
    <?php endforeach; endforeach; ?>
  </ul>
</section>

<section class="wadah bagian">
  <div class="bagian__kepala">
    <h2>Proyek pilihan</h2>
    <a class="tautan" href="<?= url('portofolio') ?>">Semua proyek</a>
  </div>
  <div class="grid-proyek">
    <?php foreach (array_slice($site['proyek'], 0, 3) as $p): include __DIR__ . '/../includes/kartu_proyek.php'; endforeach; ?>
  </div>
</section>
