// Menu mobile
const tombol = document.querySelector('.menu-tombol');
const menu = document.getElementById('menu');
if (tombol && menu) {
  tombol.addEventListener('click', () => {
    const buka = menu.classList.toggle('buka');
    tombol.setAttribute('aria-expanded', buka);
  });
}

// Filter portofolio
const tombolFilter = document.querySelectorAll('.filter__btn');
tombolFilter.forEach(btn => btn.addEventListener('click', () => {
  tombolFilter.forEach(b => b.classList.remove('aktif'));
  btn.classList.add('aktif');
  const f = btn.dataset.filter;
  document.querySelectorAll('.proyek').forEach(el => {
    el.hidden = !(f === 'semua' || el.dataset.kategori === f);
  });
}));

// Mode gelap / terang
(function () {
  const root = document.documentElement;
  const btn = document.querySelector('.tema-tombol');
  if (!btn) return;

  function terapkan(tema) {
    root.dataset.tema = tema;
    const gelap = tema === 'gelap';
    btn.setAttribute('aria-pressed', gelap);
    btn.setAttribute('aria-label', gelap ? 'Ganti ke mode terang' : 'Ganti ke mode gelap');
  }
  terapkan(root.dataset.tema || 'terang');

  btn.addEventListener('click', () => {
    const baru = root.dataset.tema === 'gelap' ? 'terang' : 'gelap';
    terapkan(baru);
    try { localStorage.setItem('tema', baru); } catch (e) {}
  });

  // Ikuti pengaturan sistem selama pengunjung belum memilih sendiri
  matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    let tersimpan = null;
    try { tersimpan = localStorage.getItem('tema'); } catch (err) {}
    if (!tersimpan) terapkan(e.matches ? 'gelap' : 'terang');
  });
})();
