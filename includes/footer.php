</main>
<footer class="kaki">
  <div class="wadah kaki__isi">
    <p>© <?= date('Y') ?> <?= h($site['nama']) ?></p>
    <p class="kaki__sosial">
      <?php foreach ($site['sosial'] as $nama => $link): ?>
        <a href="<?= h($link) ?>" target="_blank" rel="noopener noreferrer"><?= h($nama) ?></a>
      <?php endforeach; ?>
    </p>
  </div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
