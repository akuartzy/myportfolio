<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A Ramdan Fitaya | Mobile & Web Developer</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!-- ===== NAVIGATION ===== -->
  <nav>
    <div class="container nav-inner">
      <a href="#" class="logo">ARF.</a>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">☰</button>
      <ul class="nav-links" id="navLinks">
        <li><a href="#about">Tentang</a></li>
        <li><a href="#experience">Pengalaman</a></li>
        <li><a href="#works">Myportofolio</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </div>
  </nav>

  <!-- ===== HERO ===== -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-content">
        <p class="hero-greeting">Halo, saya</p>
        <h1>A Ramdan Fitaya</h1>
        <p class="hero-role">Mobile & Web Developer</p>
        <p class="hero-desc">
          Saya membangun aplikasi mobile dan website yang modern, cepat, dan mudah digunakan. 
          Fokus pada pengalaman pengguna yang bersih dan kode yang rapi serta scalable.
        </p>
        <div class="btn-group">
          <a href="{{ asset('cv-a-ramdan-fitaya.pdf') }}" class="btn btn-primary" download>
            Download CV
          </a>
          <a href="#contact" class="btn btn-secondary">
            Hubungi Saya
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== ABOUT & SKILLS ===== -->
  <section class="about" id="about">
    <div class="container">
      <h2>Tentang Saya</h2>
      <div class="about-grid">
        <div class="about-text">
          <p>
            Saya adalah Mobile & Web Developer yang passionate dalam menciptakan solusi digital 
            yang berdampak. Saya senang mengubah ide menjadi aplikasi nyata yang berguna bagi pengguna.
          </p>
          <p>
            Saat ini saya fokus pada pengembangan aplikasi Android dan website responsif dengan 
            pendekatan design-first. Saya selalu berusaha menulis kode yang bersih, maintainable, 
            dan mengikuti best practice.
          </p>
        </div>
        <div>
          <h3 style="color: var(--white); margin-bottom: 1rem; font-size: 1.2rem;">Keahlian</h3>
          <ul class="skills-list">
            <li class="skill-item">UI/UX Design</li>
            <li class="skill-item">Android Development</li>
            <li class="skill-item">Web Design</li>
            <li class="skill-item">HTML, CSS & JavaScript</li>
            <li class="skill-item">Kotlin / Java</li>
            <li class="skill-item">Responsive Design</li>
            <li class="skill-item">Git & Version Control</li>
            <li class="skill-item">Figma</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== EXPERIENCE ===== -->
  <section class="experience" id="experience">
    <div class="container">
      <h2>Pengalaman</h2>
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-date">2024 – Sekarang</p>
          <h3 class="timeline-title">Freelance Mobile & Web Developer</h3>
          <p class="timeline-company">Independent</p>
          <p class="timeline-desc">
            Mengerjakan berbagai proyek aplikasi Android dan website untuk klien lokal. 
            Mulai dari aplikasi utilitas hingga landing page bisnis.
          </p>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-date">2023 – 2024</p>
          <h3 class="timeline-title">Magang Web Developer</h3>
          <p class="timeline-company">PT. Digital Solusi Indonesia</p>
          <p class="timeline-desc">
            Membantu pengembangan website company profile dan dashboard internal. 
            Belajar kolaborasi tim menggunakan Git dan Agile method.
          </p>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-date">2022 – 2023</p>
          <h3 class="timeline-title">Proyek Akademik & Personal</h3>
          <p class="timeline-company">Sekolah / Self-Learning</p>
          <p class="timeline-desc">
            Membangun beberapa aplikasi Android sederhana dan website sebagai portofolio. 
            Memperdalam pemahaman tentang UI/UX dan best practice coding.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WORKS ===== -->
  <section class="works" id="works">
    <div class="container">
      <h2>Myportofolio</h2>
      <div class="works-grid">

        <!-- Project 1 -->
        <article class="project-card">
          <div class="project-icon">📱</div>
          <h3 class="project-title">TaskMaster – To-Do App</h3>
          <p class="project-desc">
            Aplikasi Android untuk mengelola tugas harian. Dilengkapi fitur reminder, 
            kategori, dan dark mode. Dibangun dengan Kotlin dan Material Design.
          </p>
          <div class="project-tags">
            <span class="tag">Kotlin</span>
            <span class="tag">Android</span>
            <span class="tag">Material UI</span>
          </div>
          <a href="#" class="btn btn-primary btn-project">Download APK</a>
        </article>

        <!-- Project 2 -->
        <article class="project-card">
          <div class="project-icon">🛒</div>
          <h3 class="project-title">ShopEase – Mini E-Commerce</h3>
          <p class="project-desc">
            Website toko online sederhana dengan katalog produk, keranjang belanja, 
            dan halaman checkout. Responsif dan dioptimasi untuk mobile.
          </p>
          <div class="project-tags">
            <span class="tag">HTML/CSS</span>
            <span class="tag">JavaScript</span>
            <span class="tag">Responsive</span>
          </div>
          <a href="#" class="btn btn-primary btn-project">Lihat Project</a>
        </article>

        <!-- Project 3 -->
        <article class="project-card">
          <div class="project-icon">📊</div>
          <h3 class="project-title">Finance Tracker App</h3>
          <p class="project-desc">
            Aplikasi mobile untuk mencatat pemasukan dan pengeluaran. 
            Dilengkapi grafik sederhana dan filter berdasarkan kategori & tanggal.
          </p>
          <div class="project-tags">
            <span class="tag">Kotlin</span>
            <span class="tag">Room DB</span>
            <span class="tag">Charts</span>
          </div>
          <a href="#" class="btn btn-primary btn-project">Download APK</a>
        </article>

      </div>
    </div>
  </section>

  <!-- ===== CONTACT ===== -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-content">
        <h2>Mari Bekerja Sama</h2>
        <p>
          Tertarik untuk berkolaborasi atau membutuhkan developer untuk proyek Anda? 
          Saya siap membantu mewujudkan ide menjadi aplikasi yang berkualitas. 
          Silakan hubungi saya melalui email.
        </p>
        <a href="mailto:ramdanpplg3@gmail.com" class="btn btn-secondary btn-contact">
          Hubungi via Email
        </a>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer>
    <div class="container">
      <p>© {{ date('Y') }} A Ramdan Fitaya. Dibuat dengan ❤️ untuk peluang kerja.</p>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });

    // Close menu when clicking a link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
      });
    });
  </script>
</body>
</html>