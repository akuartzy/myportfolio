<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>A Ramdan Fitaya — Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{--bg:#0a0618;--bg2:#1a1038;--ink:#f3efff;--mute:#9a8fc2;--vio:#8b5cf6;--lav:#c4b5fd;--teal:#2dd4bf;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}
*,*::before,*::after{box-sizing:inherit;margin:0}
html{scroll-behavior:smooth;scroll-padding-top:72px}
body{background:var(--bg);color:var(--ink);font-family:"Space Grotesk",system-ui,sans-serif;line-height:1.6;overflow-x:hidden}
a{color:inherit;text-decoration:none}
:focus-visible{outline:2px solid var(--teal);outline-offset:3px}
#bg{position:fixed;inset:0;width:100%;height:100%;z-index:0}
header{position:fixed;top:env(safe-area-inset-top,0px);left:0;right:0;z-index:10;display:flex;justify-content:space-between;align-items:center;padding:16px 5vw;background:linear-gradient(var(--bg),transparent)}
.logo{font-weight:700;font-size:1.05rem;max-width:7ch;line-height:1.1}
nav{display:flex;gap:22px;font-size:.95rem;font-weight:500}
nav a{color:var(--mute);transition:color .2s}nav a:hover{color:var(--ink)}
main{position:relative;z-index:1}
section{min-height:100vh;display:flex;flex-direction:column;justify-content:center;padding:96px 5vw 64px;max-width:1120px;margin-inline:auto}
h1{font-size:clamp(2.6rem,9vw,6rem);line-height:1;font-weight:700;letter-spacing:-.03em;max-width:12ch}
.lead{color:var(--mute);max-width:52ch;margin-top:20px;font-size:1.1rem}
.btn{display:inline-block;margin-top:32px;padding:13px 26px;border-radius:999px;background:var(--vio);font-weight:700;width:fit-content;transition:transform .2s,background .2s}
.btn:hover{background:#7c3aed;transform:translateY(-2px)}
h2{font-size:clamp(2rem,6vw,3.4rem);line-height:1.05;letter-spacing:-.02em}
.work{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;margin-top:40px}
.info .no{font-size:4rem;font-weight:700;color:var(--lav);line-height:1}
.info .tag{color:var(--teal);font-weight:500;margin-bottom:6px}
.info h3{font-size:2rem;line-height:1.1;margin:10px 0}
.info p{color:var(--mute);max-width:36ch}
.stage{perspective:1100px;display:grid;place-items:center;min-height:440px;cursor:grab;touch-action:pan-y;user-select:none}
.stage:active{cursor:grabbing}
.phone{width:230px;height:440px;border-radius:36px;padding:10px;background:linear-gradient(145deg,#2a1b55,#0f0828);box-shadow:0 0 0 2px #3b2a73,0 40px 80px -20px rgba(139,92,246,.55);transform-style:preserve-3d;transition:transform .15s ease-out}
.screen{height:100%;border-radius:28px;display:flex;flex-direction:column;justify-content:flex-end;padding:0;position:relative;overflow:hidden;transform:translateZ(30px);background:#0a0618}
.screen img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;border-radius:28px;z-index:1;pointer-events:none}
.screen .overlay{position:relative;z-index:2;padding:20px;background:linear-gradient(to top,rgba(10,6,24,.92) 0%,transparent 70%);display:flex;flex-direction:column;justify-content:flex-end;height:100%}
.screen b{font-size:1.35rem;line-height:1.15}
.screen span{color:var(--ink);opacity:.85;font-size:.85rem;margin-top:6px}
.dots{display:flex;gap:10px;justify-content:center;margin-top:28px;grid-column:1/-1}
.dots button{width:10px;height:10px;border-radius:50%;border:0;background:#3b2a73;cursor:pointer;transition:all .3s}
.dots button[aria-current=true]{width:30px;border-radius:6px;background:var(--lav)}

/* ===== TOMBOL SLIDE YANG LEBIH MENARIK ===== */
.nav-arrows{
  display:flex;
  gap:16px;
  justify-content:center;
  margin-top:22px;
  grid-column:1/-1;
}
.nav-arrows button{
  width:52px;
  height:52px;
  border-radius:50%;
  border:none;
  background:linear-gradient(145deg, #2a1b55, #1a1038);
  color:var(--ink);
  cursor:pointer;
  display:grid;
  place-items:center;
  position:relative;
  overflow:hidden;
  transition:all .3s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 4px 15px rgba(139, 92, 246, 0.25);
}
.nav-arrows button::before{
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(135deg, var(--vio), var(--teal));
  opacity:0;
  transition:opacity .3s ease;
  border-radius:50%;
}
.nav-arrows button:hover{
  transform:translateY(-4px) scale(1.08);
  box-shadow: 0 8px 25px rgba(139, 92, 246, 0.45);
}
.nav-arrows button:hover::before{
  opacity:1;
}
.nav-arrows button:active{
  transform:translateY(-1px) scale(0.97);
}
.nav-arrows button svg{
  width:22px;
  height:22px;
  position:relative;
  z-index:1;
  transition:transform .3s ease;
}
.nav-arrows button:hover svg{
  transform:scale(1.15);
}

.tabs{display:flex;gap:8px;background:var(--bg2);padding:6px;border-radius:999px;width:fit-content;margin:28px 0}
.tabs button{border:0;background:none;color:var(--mute);font:inherit;font-weight:500;padding:10px 22px;border-radius:999px;cursor:pointer}
.tabs button[aria-selected=true]{background:var(--vio);color:#fff}
.items{display:grid;gap:16px;grid-template-columns:repeat(auto-fit,minmax(240px,1fr))}
.item{background:var(--bg2);border-radius:20px;padding:24px;border:1px solid #2c1d5c;transition:transform .2s ease-out;transform-style:preserve-3d}
.item h4{font-size:1.35rem;line-height:1.2}.item small{color:var(--teal);font-size:.95rem}.item p{color:var(--mute);margin-top:8px}

.hero{display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center}
.photo-wrap{width:220px;height:220px;border-radius:50%;padding:6px;background:linear-gradient(135deg,var(--vio),var(--teal));box-shadow:0 20px 50px -15px rgba(139,92,246,.5);flex-shrink:0}
.photo-wrap img{width:100%;height:100%;border-radius:50%;object-fit:cover;display:block;border:4px solid var(--bg)}
.name{font-size:clamp(1.1rem,3vw,1.4rem);font-weight:500;color:var(--lav);margin-bottom:8px;letter-spacing:.02em}
.role{display:inline-block;background:var(--bg2);border:1px solid #2c1d5c;color:var(--teal);font-size:.9rem;font-weight:500;padding:6px 14px;border-radius:999px;margin-bottom:16px}

.skills-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:14px;margin-top:36px}
.skill{background:var(--bg2);border:1px solid #2c1d5c;border-radius:16px;padding:18px 16px;text-align:center;font-weight:500;transition:transform .2s,border-color .2s}
.skill:hover{transform:translateY(-4px);border-color:var(--vio)}
.skill span{display:block;font-size:1.8rem;margin-bottom:8px}

.contact-links{display:flex;flex-wrap:wrap;gap:16px;margin-top:32px}
.contact-link{display:inline-flex;align-items:center;gap:10px;padding:14px 22px;border-radius:999px;background:var(--bg2);border:1px solid #2c1d5c;font-weight:500;font-size:1rem;transition:transform .2s,background .2s,border-color .2s}
.contact-link:hover{transform:translateY(-3px);background:#23164a;border-color:var(--vio)}
.contact-link svg{width:20px;height:20px;flex-shrink:0}
.contact-link.wa:hover{border-color:#25D366;color:#25D366}
.contact-link.ig:hover{border-color:#E1306C;color:#E1306C}
.contact-link.mail:hover{border-color:var(--lav);color:var(--lav)}

footer{position:relative;z-index:1;text-align:center;color:var(--mute);padding:32px;font-size:.9rem}
@media(max-width:760px){
  .work{grid-template-columns:1fr;gap:24px}
  .stage{min-height:480px}
  nav{gap:12px;font-size:.82rem}
  .hero{grid-template-columns:1fr;text-align:center}
  .photo-wrap{margin:0 auto 24px;width:180px;height:180px;order:-1}
  .hero .btn{margin-inline:auto}
  .lead{margin-inline:auto}
  .name,.role{text-align:center}
}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*{transition:none!important}}
</style>
</head>
<body>
<canvas id="bg" aria-hidden="true"></canvas>
<header>
  <a class="logo" href="#home">ARF</a>
  <nav>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#experience">Experience</a>
    <a href="#works">Works</a>
    <a href="#contact">Contact</a>
  </nav>
</header>
<main>

<!-- HOME -->
<section id="home">
  <div class="hero">
    <div class="hero-text">
      <div class="name">A Ramdan Fitaya</div>
      <div class="role">Pelajar SMK · IT & Desain</div>
      <h1>Membangun web yang terasa hidup.</h1>
      <p class="lead">Saya adalah pelajar SMK Wyata Dharma yang memiliki minat di bidang IT dan desain. Siap belajar, berkolaborasi, dan terus berkembang.</p>
      <a class="btn" href="#works">Lihat proyek</a>
    </div>
    <div class="photo-wrap">
      <!-- Ganti dengan foto kamu: src="foto-profil.jpg" -->
      <img src="{{ asset('images/profile.jpg') }}" alt="A Ramdan Fitaya">
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <h2>About Me</h2>
  <p class="lead" style="margin-top:20px;max-width:60ch">
    Saya adalah pelajar SMK Wyata Dharma yang memiliki minat di bidang IT dan desain. Saya memiliki kemampuan dalam bekerja sama dalam tim, berpikir kreatif, serta mampu beradaptasi dengan lingkungan dan tugas baru. Saya juga memiliki pengalaman Praktik Kerja Lapangan (PKL) di PT. Villa Merah Indonesia Bandung dan terus berusaha mengembangkan keterampilan serta pengalaman untuk menjadi pribadi yang lebih baik.
  </p>

  <div class="skills-grid" style="margin-top:40px">
    <div class="skill"><span>💻</span>IT</div>
    <div class="skill"><span>🤝</span>Kerja Tim</div>
    <div class="skill"><span>✨</span>Kreativitas</div>
    <div class="skill"><span>🎨</span>Desain</div>
    <div class="skill"><span>🌐</span>HTML & CSS</div>
    <div class="skill"><span>📱</span>Responsive</div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience">
  <h2>Experience</h2>
  <div class="tabs" role="tablist">
    <button role="tab" aria-selected="true" data-tab="exp">Experience</button>
    <button role="tab" aria-selected="false" data-tab="edu">Education</button>
  </div>
  <div class="items" id="items"></div>
</section>

<!-- WORKS -->
<section id="works">
  <h2>Works</h2>
  <div class="work">
    <div class="info" aria-live="polite">
      <div class="no" id="pNo">01</div>
      <div class="tag" id="pTag">Web</div>
      <h3 id="pTitle">Landing Page Kopi</h3>
      <p id="pDesc"></p>
    </div>
    <div class="stage" id="stage">
      <div class="phone" id="phone">
        <div class="screen" id="screen">
          <img id="sImg" src="" alt="Project preview">
          <div class="overlay">
            <b id="sTitle"></b>
            <span id="sSub"></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Dots + Tombol panah -->
    <div class="dots" id="dots" role="group" aria-label="Pilih proyek"></div>
    <div class="nav-arrows">
      <button id="prevBtn" aria-label="Proyek sebelumnya">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M15 18l-6-6 6-6"/>
        </svg>
      </button>
      <button id="nextBtn" aria-label="Proyek selanjutnya">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 18l6-6-6-6"/>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">
  <h2>Mari bikin sesuatu bersama.</h2>
  
  <div class="contact-links">
    <!-- WhatsApp dari CV -->
    <a class="contact-link wa" href="https://wa.me/6283105672190" target="_blank" rel="noopener">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      WhatsApp
    </a>

    <!-- Email dari CV -->
    <a class="contact-link mail" href="mailto:akuartzy@gmail.com">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      Email
    </a>

    <a class="contact-link ig" href="https://www.instagram.com/artzy93?stkn=MWdncHdhczg2N2owdg==/" target="_blank" rel="noopener">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
      Instagram
    </a>
  </div>
</section>
</main>

<footer>© 2026 A Ramdan Fitaya</footer>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
/* ====== DATA DARI CV ====== */
const projects = [
  {
    no: "01",
    tag: "Web",
    title: "Landing Page Kopi",
    desc: "Landing page modern untuk brand kopi lokal. Dibuat responsif, dengan animasi soft dan fokus pada visual produk. Cocok untuk UMKM yang ingin tampil profesional di internet.",
    tech: "HTML, CSS & JavaScript",
    img: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400&h=800&fit=crop"
  },
  {
    no: "02",
    tag: "Web",
    title: "Task Manager",
    desc: "Aplikasi web sederhana untuk mengelola tugas harian. Fitur utama: menambah, menandai selesai, dan menghapus task. Dibangun dengan konsep clean UI dan local storage.",
    tech: "HTML, CSS & JavaScript",
    img: "https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=400&h=800&fit=crop"
  },
  {
    no: "03",
    tag: "Web",
    title: "Weather Web App",
    desc: "Aplikasi cuaca real-time yang menampilkan suhu, kondisi cuaca, dan lokasi. Menggunakan Weather API agar data selalu up-to-date. Desain minimalis dan ramah mobile.",
    tech: "HTML, CSS, JavaScript + Weather API",
    img: "https://images.unsplash.com/photo-1504608524841-42fe6f032b4b?w=400&h=800&fit=crop"
  },
  {
    no: "04",
    tag: "Web",
    title: "Quiz App",
    desc: "Aplikasi kuis interaktif dengan skor real-time. Pengguna bisa menjawab pertanyaan pilihan ganda dan langsung melihat hasilnya. Cocok untuk belajar sambil bermain.",
    tech: "HTML, CSS & JavaScript",
    img: "https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?w=400&h=800&fit=crop"
  },
  {
    no: "05",
    tag: "Web",
    title: "Music Player",
    desc: "Pemutar musik sederhana dengan fitur play, pause, next, previous, dan progress bar. Desain modern dengan fokus pada pengalaman pengguna yang nyaman.",
    tech: "HTML, CSS & JavaScript",
    img: "https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=400&h=800&fit=crop"
  }
];

const data = {
  exp: [
    {
      t: "Praktik Kerja Lapangan (PKL)",
      s: "PT. Villa Merah Indonesia Bandung",
      p: "Mengikuti Praktik Kerja Lapangan di PT. Villa Merah Indonesia Bandung."
    }
  ],
  edu: [
    { t: "SMK Wyata Dharma", s: "Saat ini", p: "Pelajar SMK dengan minat di bidang IT dan desain." },
    { t: "PGRI 384 Rendeh", s: "SMP", p: "Pendidikan menengah pertama." },
    { t: "SD Negeri Nugraha", s: "SD", p: "Pendidikan dasar." }
  ]
};

const itemsEl = document.getElementById('items');
function renderItems(k) {
  itemsEl.innerHTML = data[k].map(i =>
    `<article class="item"><small>${i.s}</small><h4>${i.t}</h4><p>${i.p}</p></article>`
  ).join('');
}
renderItems('exp');

document.querySelectorAll('.tabs button').forEach(b => b.onclick = () => {
  document.querySelectorAll('.tabs button').forEach(x => x.setAttribute('aria-selected', x === b));
  renderItems(b.dataset.tab);
});

itemsEl.addEventListener('pointermove', e => {
  const c = e.target.closest('.item'); if (!c) return;
  const r = c.getBoundingClientRect();
  const x = (e.clientX - r.left) / r.width - .5, y = (e.clientY - r.top) / r.height - .5;
  c.style.transform = `perspective(600px) rotateY(${x*12}deg) rotateX(${-y*12}deg)`;
});
itemsEl.addEventListener('pointerout', e => {
  const c = e.target.closest('.item'); if (c) c.style.transform = '';
});

/* ====== WORKS SLIDER ====== */
const $ = id => document.getElementById(id);
const dots = $('dots');
const stage = $('stage');
const phone = $('phone');
let cur = 0;

projects.forEach((p, i) => {
  const b = document.createElement('button');
  b.setAttribute('aria-label', 'Proyek ' + p.no);
  b.onclick = () => show(i);
  dots.appendChild(b);
});

function show(i) {
  cur = (i + projects.length) % projects.length;
  const p = projects[cur];
  $('pNo').textContent = p.no;
  $('pTag').textContent = p.tag;
  $('pTitle').textContent = p.title;
  $('pDesc').innerHTML = `
    ${p.desc}<br><br>
    <small style="color:var(--teal)">Tech: ${p.tech}</small>
  `;
  $('sTitle').textContent = p.title;
  $('sSub').textContent = p.tag;
  $('sImg').src = p.img;
  $('sImg').alt = p.title;
  [...dots.children].forEach((d, j) => d.setAttribute('aria-current', j === cur));
}
show(0);

/* Tombol panah */
$('prevBtn').onclick = () => show(cur - 1);
$('nextBtn').onclick = () => show(cur + 1);

/* ====== SWIPE / DRAG ====== */
let startX = 0;
let isDragging = false;

stage.addEventListener('pointerdown', e => {
  isDragging = true;
  startX = e.clientX;
  stage.setPointerCapture(e.pointerId);
});

stage.addEventListener('pointerup', e => {
  if (!isDragging) return;
  isDragging = false;
  const diff = e.clientX - startX;

  if (Math.abs(diff) > 50) {
    if (diff > 0) show(cur - 1);
    else show(cur + 1);
  }
});

stage.addEventListener('pointercancel', () => isDragging = false);

/* 3D tilt tetap jalan */
stage.addEventListener('pointermove', e => {
  if (isDragging) return;
  const r = stage.getBoundingClientRect();
  const x = (e.clientX - r.left) / r.width - .5;
  const y = (e.clientY - r.top) / r.height - .5;
  phone.style.transform = `rotateY(${x*40}deg) rotateX(${-y*30}deg)`;
});
stage.addEventListener('pointerleave', () => {
  phone.style.transform = 'rotateY(-18deg) rotateX(6deg)';
});
phone.style.transform = 'rotateY(-18deg) rotateX(6deg)';

/* ====== THREE.JS BACKGROUND ====== */
(function () {
  const cv = $('bg');
  if (!window.THREE) return;
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const R = new THREE.WebGLRenderer({ canvas: cv, alpha: true, antialias: true });
  R.setPixelRatio(Math.min(devicePixelRatio, 2));
  const S = new THREE.Scene(), C = new THREE.PerspectiveCamera(55, 1, .1, 100);
  C.position.z = 9;
  const knot = new THREE.Mesh(new THREE.TorusKnotGeometry(2, .55, 160, 20), new THREE.MeshBasicMaterial({ color: 0x8b5cf6, wireframe: true, transparent: true, opacity: .5 }));
  const ico = new THREE.Mesh(new THREE.IcosahedronGeometry(1, 1), new THREE.MeshBasicMaterial({ color: 0x2dd4bf, wireframe: true, transparent: true, opacity: .7 }));
  const g = new THREE.Group(); g.add(knot, ico); S.add(g);
  const n = 400, pos = new Float32Array(n * 3);
  for (let i = 0; i < n * 3; i++) pos[i] = (Math.random() - .5) * 40;
  const pg = new THREE.BufferGeometry(); pg.setAttribute('position', new THREE.BufferAttribute(pos, 3));
  const pts = new THREE.Points(pg, new THREE.PointsMaterial({ color: 0xc4b5fd, size: .06 })); S.add(pts);
  let mx = 0, my = 0, sy = 0;
  addEventListener('pointermove', e => { mx = e.clientX / innerWidth - .5; my = e.clientY / innerHeight - .5; });
  addEventListener('scroll', () => sy = scrollY / innerHeight);
  function size() {
    R.setSize(innerWidth, innerHeight, false);
    C.aspect = innerWidth / innerHeight; C.updateProjectionMatrix();
    g.position.x = innerWidth > 760 ? 3.2 : 0;
    g.scale.setScalar(innerWidth > 760 ? 1 : .7);
  }
  addEventListener('resize', size); size();
  let t = 0;
  (function loop() {
    requestAnimationFrame(loop);
    if (!reduce) t += .005;
    knot.rotation.set(t * 1.2 + my, t + mx, 0);
    ico.rotation.set(-t * 2, t * 2, 0);
    g.position.y = -sy * 2.2 + Math.sin(t * 3) * .2;
    pts.rotation.y = t * .15 + sy * .3;
    C.position.x += (mx * 2 - C.position.x) * .05;
    C.position.y += (-my * 2 - C.position.y) * .05;
    C.lookAt(0, 0, 0);
    R.render(S, C);
  })();
})();
</script>
</body>
</html>