<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A Ramdan Fitaya — IT & Design Student Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            grotesk: ['Space Grotesk', 'sans-serif'],
            inter: ['Inter', 'sans-serif'],
          },
          colors: {
            nova: {
              blue: '#3b82f6',
              cyan: '#60a5fa',
              light: '#f4f7fb',
              soft: '#e9eef5',
            }
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'float-slow': 'float 8s ease-in-out infinite',
            'pulse-dot': 'pulse-dot 2s ease-in-out infinite',
            'glow': 'glow 2.5s ease-in-out infinite alternate',
            'shimmer': 'shimmer 3s linear infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-12px)' },
            },
            'pulse-dot': {
              '0%, 100%': { opacity: 1, transform: 'scale(1)' },
              '50%': { opacity: 0.5, transform: 'scale(1.3)' },
            },
            glow: {
              '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.4)' },
              '100%': { boxShadow: '0 0 35px rgba(96, 165, 250, 0.7)' },
            },
            shimmer: {
              '0%': { backgroundPosition: '-200% center' },
              '100%': { backgroundPosition: '200% center' },
            }
          }
        }
      }
    }
  </script>
  <style>
    :root {
      --glass-bg: rgba(255, 255, 255, 0.65);
      --glass-border: rgba(255, 255, 255, 0.8);
      --glass-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f4f7fb 0%, #e9eef5 50%, #f0f4fa 100%);
      min-height: 100vh;
      color: #1e293b;
      overflow-x: hidden;
    }

    .ambient-orb {
      position: fixed;
      border-radius: 50%;
      filter: blur(80px);
      pointer-events: none;
      z-index: 0;
      opacity: 0.45;
    }
    .orb-1 {
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(96, 165, 250, 0.35), transparent 70%);
      top: -150px;
      right: -100px;
    }
    .orb-2 {
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(147, 197, 253, 0.3), transparent 70%);
      bottom: 20%;
      left: -100px;
    }
    .orb-3 {
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(191, 219, 254, 0.4), transparent 70%);
      top: 50%;
      right: 10%;
    }

    .glass {
      background: var(--glass-bg);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid var(--glass-border);
      border-radius: 20px;
      box-shadow: var(--glass-shadow);
    }

    .glass-strong {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.9);
      border-radius: 20px;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.06);
    }

    .glass-card {
      transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.35s ease;
    }
    .glass-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }

    .metallic-text {
      background: linear-gradient(
        135deg,
        #1e3a5f 0%,
        #3b82f6 25%,
        #60a5fa 40%,
        #93c5fd 50%,
        #3b82f6 60%,
        #1e40af 80%,
        #1e3a5f 100%
      );
      background-size: 200% auto;
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: shimmer 4s linear infinite;
      filter: drop-shadow(0 2px 8px rgba(59, 130, 246, 0.25));
    }

    .btn-primary {
      background: linear-gradient(135deg, #60a5fa, #3b82f6);
      color: white;
      border-radius: 9999px;
      padding: 0.85rem 1.75rem;
      font-weight: 600;
      font-size: 0.95rem;
      letter-spacing: 0.02em;
      transition: all 0.3s ease;
      box-shadow: 0 4px 20px rgba(59, 130, 246, 0.35);
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(59, 130, 246, 0.5);
      background: linear-gradient(135deg, #93c5fd, #60a5fa);
    }

    .btn-secondary {
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(12px);
      border: 1.5px solid rgba(255, 255, 255, 0.9);
      color: #1e40af;
      border-radius: 9999px;
      padding: 0.85rem 1.75rem;
      font-weight: 600;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }
    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.8);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    }

    .progress-track {
      height: 8px;
      background: rgba(226, 232, 240, 0.8);
      border-radius: 9999px;
      overflow: hidden;
    }
    .progress-fill {
      height: 100%;
      border-radius: 9999px;
      background: linear-gradient(90deg, #60a5fa, #3b82f6);
      transition: width 1.2s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .tech-chip {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.85);
      border-radius: 14px;
      padding: 0.75rem 0.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.4rem;
      transition: all 0.3s ease;
      font-size: 0.7rem;
      font-weight: 500;
      color: #334155;
    }
    .tech-chip:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.15);
      border-color: rgba(96, 165, 250, 0.5);
    }

    .case-thumb {
      background: linear-gradient(145deg, #0f172a, #1e293b);
      border-radius: 14px;
      overflow: hidden;
      position: relative;
      aspect-ratio: 16/10;
    }

    .phil-node {
      background: rgba(255, 255, 255, 0.85);
      border: 1px solid rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      padding: 0.6rem 1rem;
      font-size: 0.8rem;
      font-weight: 600;
      color: #1e40af;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
      white-space: nowrap;
    }

    .qr-pattern {
      background-image: 
        linear-gradient(45deg, #1e293b 25%, transparent 25%),
        linear-gradient(-45deg, #1e293b 25%, transparent 25%),
        linear-gradient(45deg, transparent 75%, #1e293b 75%),
        linear-gradient(-45deg, transparent 75%, #1e293b 75%);
      background-size: 12px 12px;
      background-position: 0 0, 0 6px, 6px -6px, -6px 0px;
    }

    .star-icon {
      animation: float 5s ease-in-out infinite;
    }
    .star-icon:nth-child(2) { animation-delay: 1s; }
    .star-icon:nth-child(3) { animation-delay: 2s; }

    html {
      scroll-behavior: smooth;
    }

    @media (max-width: 768px) {
      .metallic-text {
        font-size: 2.75rem !important;
      }
    }

    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #e9eef5;
    }
    ::-webkit-scrollbar-thumb {
      background: #93c5fd;
      border-radius: 4px;
    }
  </style>
</head>
<body class="relative">
  {{-- Ambient background orbs --}}
  <div class="ambient-orb orb-1"></div>
  <div class="ambient-orb orb-2"></div>
  <div class="ambient-orb orb-3"></div>

  {{-- ========== NAVIGATION ========== --}}
  <nav class="relative z-50 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
    <div class="glass flex items-center justify-between px-5 py-3">
      {{-- Logo --}}
      <div class="flex items-center gap-2.5">
        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
          <span class="text-white font-grotesk font-bold text-sm">R</span>
        </div>
        <span class="font-grotesk font-bold text-lg tracking-tight text-slate-800">RAMDAN</span>
      </div>

      {{-- Status badge --}}
      <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/70 border border-white/80 shadow-sm">
        <span class="relative flex h-2.5 w-2.5">
          <span class="animate-pulse-dot absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
        </span>
        <span class="text-xs font-semibold text-slate-600 tracking-wide uppercase">Terbuka untuk Kesempatan</span>
      </div>
    </div>
  </nav>

  {{-- ========== HERO SECTION ========== --}}
  <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 lg:pt-12 lg:pb-24">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
      {{-- Left content --}}
      <div class="space-y-6 lg:space-y-8">
        <h1 class="font-grotesk font-bold text-4xl sm:text-5xl lg:text-6xl xl:text-7xl leading-[0.95] tracking-tight metallic-text">
          A. RAMDAN<br>FITAYA
        </h1>
        <p class="text-xl sm:text-2xl font-medium text-slate-600 font-grotesk">
          Pelajar IT & Desain · SMK Wyata Dharma
        </p>
        <p class="text-base sm:text-lg text-slate-500 max-w-md leading-relaxed">
          Saya adalah pelajar yang memiliki minat di bidang IT dan desain. Memiliki kemampuan bekerja sama dalam tim, berpikir kreatif, serta mampu beradaptasi dengan lingkungan dan tugas baru.
        </p>
        <div class="flex flex-wrap gap-3 pt-2">
          <a href="#pengalaman" class="btn-primary">
            LIHAT PENGALAMAN
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#kontak" class="btn-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
            HUBUNGI SAYA
          </a>
        </div>
      </div>

      {{-- Right: Hero graphic --}}
      {{-- Right: Foto Profil --}}
<div class="relative flex justify-center lg:justify-end">
  <div class="relative w-full max-w-md aspect-square">
    <div class="absolute inset-0 glass-strong overflow-hidden flex items-center justify-center p-5">
      
      {{-- ==================== FOTO PROFIL ==================== --}}
      <img 
        src="{{ asset('images/foto-profil.jpg') }}" 
        alt="A Ramdan Fitaya"
        class="w-full h-full object-cover rounded-2xl shadow-lg"
        onerror="this.src='https://ui-avatars.com/api/?name=A+Ramdan+Fitaya&background=3b82f6&color=fff&size=400&bold=true'"
      >
      {{-- ==================================================== --}}

    </div>

    {{-- Floating badges --}}
    <div class="absolute -top-3 -right-2 star-icon">
      <div class="w-12 h-12 rounded-full glass flex items-center justify-center shadow-lg">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#3b82f6">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
      </div>
    </div>
    <div class="absolute top-1/4 -left-4 star-icon" style="animation-delay: 1.5s">
      <div class="w-10 h-10 rounded-full glass flex items-center justify-center shadow-md">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
          <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
        </svg>
      </div>
    </div>
    <div class="absolute bottom-8 -right-5 star-icon" style="animation-delay: 0.8s">
      <div class="w-14 h-14 rounded-2xl glass flex items-center justify-center shadow-lg">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
          <path d="M12 20V10M18 20V4M6 20v-4"/>
        </svg>
      </div>
    </div>
    <div class="absolute bottom-1/4 -left-6 star-icon" style="animation-delay: 2.2s">
      <div class="w-9 h-9 rounded-full glass flex items-center justify-center">
        <div class="w-3 h-3 rounded-full bg-gradient-to-br from-blue-400 to-blue-600"></div>
      </div>
    </div>
  </div>
</div>

          {{-- Floating badges --}}
          <div class="absolute -top-3 -right-2 star-icon">
            <div class="w-12 h-12 rounded-full glass flex items-center justify-center shadow-lg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#3b82f6" stroke="#3b82f6" stroke-width="1">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
            </div>
          </div>
          <div class="absolute top-1/4 -left-4 star-icon" style="animation-delay: 1.5s">
            <div class="w-10 h-10 rounded-full glass flex items-center justify-center shadow-md">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
              </svg>
            </div>
          </div>
          <div class="absolute bottom-8 -right-5 star-icon" style="animation-delay: 0.8s">
            <div class="w-14 h-14 rounded-2xl glass flex items-center justify-center shadow-lg">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M12 20V10M18 20V4M6 20v-4"/>
              </svg>
            </div>
          </div>
          <div class="absolute bottom-1/4 -left-6 star-icon" style="animation-delay: 2.2s">
            <div class="w-9 h-9 rounded-full glass flex items-center justify-center">
              <div class="w-3 h-3 rounded-full bg-gradient-to-br from-blue-400 to-blue-600"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ========== KEY METRICS & STATS ========== --}}
  <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
      <div class="glass glass-card p-5 flex flex-col items-center text-center">
        <span class="font-grotesk font-bold text-3xl sm:text-4xl text-blue-600">18</span>
        <span class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Tahun</span>
      </div>
      <div class="glass glass-card p-5 flex flex-col items-center text-center">
        <span class="font-grotesk font-bold text-3xl sm:text-4xl text-blue-600">3</span>
        <span class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Jenjang Pendidikan</span>
      </div>
      <div class="glass glass-card p-5 flex flex-col items-center text-center">
        <span class="font-grotesk font-bold text-3xl sm:text-4xl text-blue-600">1</span>
        <span class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Pengalaman PKL</span>
      </div>
      <div class="glass glass-card p-5 flex flex-col items-center text-center">
        <span class="font-grotesk font-bold text-3xl sm:text-4xl text-blue-600">IT</span>
        <span class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">& Desain</span>
      </div>
      <div class="glass glass-card p-5 col-span-2 md:col-span-3 lg:col-span-1 flex flex-col justify-center">
        <p class="text-sm text-slate-600 italic leading-snug">"Terus berusaha mengembangkan keterampilan serta pengalaman untuk menjadi pribadi yang lebih baik."</p>
        <p class="text-xs text-blue-600 font-semibold mt-2">— A. Ramdan Fitaya</p>
      </div>
    </div>
  </section>

  {{-- ========== TENTANG SAYA ========== --}}
  <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
    <div class="glass p-6 sm:p-8">
      <h2 class="font-grotesk font-bold text-2xl sm:text-3xl text-slate-800 mb-4 flex items-center gap-2">
        <span class="text-blue-500">✦</span> TENTANG SAYA
      </h2>
      <p class="text-slate-600 leading-relaxed max-w-3xl">
        Saya adalah pelajar SMK Wyata Dharma yang memiliki minat di bidang IT dan desain. Saya memiliki kemampuan dalam bekerja sama dalam tim, berpikir kreatif, serta mampu beradaptasi dengan lingkungan dan tugas baru. Saya juga memiliki pengalaman Praktik Kerja Lapangan (PKL) di PT. Villa Merah Indonesia Bandung dan terus berusaha mengembangkan keterampilan serta pengalaman untuk menjadi pribadi yang lebih baik.
      </p>
    </div>
  </section>

  {{-- ========== DATA PRIBADI + PENDIDIKAN ========== --}}
  <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
    <div class="grid md:grid-cols-2 gap-6">
      {{-- Data Pribadi --}}
      <div class="glass p-6">
        <h3 class="font-grotesk font-bold text-lg text-slate-800 mb-5 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </span>
          Data Pribadi
        </h3>
        <div class="space-y-3 text-sm">
          <div class="flex justify-between border-b border-slate-100 pb-2">
            <span class="text-slate-500">Nama</span>
            <span class="font-medium text-slate-800">A Ramdan Fitaya</span>
          </div>
          <div class="flex justify-between border-b border-slate-100 pb-2">
            <span class="text-slate-500">Tanggal Lahir</span>
            <span class="font-medium text-slate-800">26 September 2008</span>
          </div>
          <div class="flex justify-between border-b border-slate-100 pb-2">
            <span class="text-slate-500">Usia</span>
            <span class="font-medium text-slate-800">18 Tahun</span>
          </div>
          <div class="flex justify-between border-b border-slate-100 pb-2">
            <span class="text-slate-500">Jenis Kelamin</span>
            <span class="font-medium text-slate-800">Laki-laki</span>
          </div>
          <div class="flex justify-between border-b border-slate-100 pb-2">
            <span class="text-slate-500">Status</span>
            <span class="font-medium text-slate-800">Pelajar</span>
          </div>
          <div class="flex justify-between border-b border-slate-100 pb-2">
            <span class="text-slate-500">Kewarganegaraan</span>
            <span class="font-medium text-slate-800">Indonesia</span>
          </div>
          <div class="flex flex-col gap-1 pt-1">
            <span class="text-slate-500">Alamat</span>
            <span class="font-medium text-slate-800">Cikalong, Kec. Cikalong Wetan,<br>Kab. Bandung Barat, Jawa Barat</span>
          </div>
        </div>
      </div>

      {{-- Pendidikan --}}
      <div class="glass p-6">
        <h3 class="font-grotesk font-bold text-lg text-slate-800 mb-5 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </span>
          Pendidikan
        </h3>
        <div class="space-y-4">
          <div class="flex gap-4 items-start">
            <div class="w-3 h-3 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></div>
            <div>
              <p class="font-semibold text-slate-800">SMK Wyata Dharma</p>
              <p class="text-sm text-slate-500">Sekolah Menengah Kejuruan · Saat ini</p>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div class="w-3 h-3 rounded-full bg-blue-400 mt-1.5 flex-shrink-0"></div>
            <div>
              <p class="font-semibold text-slate-800">PGRI 384 Rendeh</p>
              <p class="text-sm text-slate-500">Sekolah Menengah Pertama</p>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div class="w-3 h-3 rounded-full bg-blue-300 mt-1.5 flex-shrink-0"></div>
            <div>
              <p class="font-semibold text-slate-800">SD Negeri Nugraha</p>
              <p class="text-sm text-slate-500">Sekolah Dasar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ========== PENGALAMAN ========== --}}
  <section id="pengalaman" class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
    <h2 class="font-grotesk font-bold text-2xl sm:text-3xl text-slate-800 mb-6 flex items-center gap-2">
      <span class="text-blue-500">✦</span> PENGALAMAN
    </h2>
    <div class="glass glass-card p-6 sm:p-8">
      <div class="flex flex-col sm:flex-row sm:items-start gap-4">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-blue-500/30">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
            <rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
            <h3 class="font-grotesk font-bold text-xl text-slate-800">Praktik Kerja Lapangan (PKL)</h3>
            <span class="text-sm font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Pengalaman Kerja</span>
          </div>
          <p class="font-semibold text-slate-700 mb-1">PT. Villa Merah Indonesia Bandung</p>
          <p class="text-sm text-slate-500 mb-4">Bandung, Jawa Barat</p>
          <p class="text-slate-600 leading-relaxed">
            Mengikuti Praktik Kerja Lapangan (PKL) di PT. Villa Merah Indonesia Bandung. Pengalaman ini memberikan kesempatan untuk menerapkan ilmu di dunia kerja nyata, mengembangkan kemampuan profesional, serta belajar beradaptasi dalam lingkungan industri.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- ========== KEAHLIAN & SKILLS ========== --}}
  <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
    <div class="grid lg:grid-cols-3 gap-6">
      {{-- Column 1: Keahlian --}}
      <div class="glass p-6">
        <h3 class="font-grotesk font-bold text-lg text-slate-800 mb-5 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M12 20V10M18 20V4M6 20v-4"/></svg>
          </span>
          Keahlian Utama
        </h3>
        <div class="space-y-4" id="skills-container">
          <div>
            <div class="flex justify-between text-sm mb-1.5">
              <span class="font-medium text-slate-700">IT & Teknologi</span>
              <span class="text-blue-600 font-semibold">85%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-width="85" style="width:0%"></div></div>
          </div>
          <div>
            <div class="flex justify-between text-sm mb-1.5">
              <span class="font-medium text-slate-700">Kerja Tim</span>
              <span class="text-blue-600 font-semibold">90%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-width="90" style="width:0%"></div></div>
          </div>
          <div>
            <div class="flex justify-between text-sm mb-1.5">
              <span class="font-medium text-slate-700">Kreativitas</span>
              <span class="text-blue-600 font-semibold">88%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-width="88" style="width:0%"></div></div>
          </div>
          <div>
            <div class="flex justify-between text-sm mb-1.5">
              <span class="font-medium text-slate-700">Desain</span>
              <span class="text-blue-600 font-semibold">80%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-width="80" style="width:0%"></div></div>
          </div>
          <div>
            <div class="flex justify-between text-sm mb-1.5">
              <span class="font-medium text-slate-700">Adaptabilitas</span>
              <span class="text-blue-600 font-semibold">92%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-width="92" style="width:0%"></div></div>
          </div>
        </div>
      </div>

      {{-- Column 2: Minat & Fokus --}}
      <div class="glass p-6">
        <h3 class="font-grotesk font-bold text-lg text-slate-800 mb-5 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </span>
          Minat & Fokus
        </h3>
        <div class="grid grid-cols-2 gap-3">
          <div class="tech-chip">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            <span>IT</span>
          </div>
          <div class="tech-chip">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/></svg>
            <span>Desain</span>
          </div>
          <div class="tech-chip">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <span>Kerja Tim</span>
          </div>
          <div class="tech-chip">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <span>Kreativitas</span>
          </div>
          <div class="tech-chip">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
            <span>Inovasi</span>
          </div>
          <div class="tech-chip">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            <span>Adaptasi</span>
          </div>
        </div>
      </div>

      {{-- Column 3: Filosofi --}}
      <div class="glass p-6 flex flex-col">
        <h3 class="font-grotesk font-bold text-lg text-slate-800 mb-5 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </span>
          Nilai Diri
        </h3>
        <div class="flex-1 relative flex items-center justify-center min-h-[220px]">
          <div class="relative z-10 w-20 h-20 animate-float">
            <svg viewBox="0 0 80 80" class="w-full h-full drop-shadow-lg">
              <defs>
                <linearGradient id="crystalGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#e0f2fe"/>
                  <stop offset="40%" stop-color="#7dd3fc"/>
                  <stop offset="70%" stop-color="#38bdf8"/>
                  <stop offset="100%" stop-color="#0284c7"/>
                </linearGradient>
                <linearGradient id="crystalShine" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" stop-color="white" stop-opacity="0.6"/>
                  <stop offset="50%" stop-color="white" stop-opacity="0.1"/>
                  <stop offset="100%" stop-color="white" stop-opacity="0.4"/>
                </linearGradient>
              </defs>
              <polygon points="40,5 70,30 60,70 20,70 10,30" fill="url(#crystalGrad)" stroke="#38bdf8" stroke-width="1"/>
              <polygon points="40,5 55,30 40,65 25,30" fill="url(#crystalShine)" opacity="0.5"/>
              <line x1="40" y1="5" x2="40" y2="65" stroke="white" stroke-width="0.8" opacity="0.4"/>
            </svg>
          </div>

          <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 300 260">
            <line x1="150" y1="130" x2="60" y2="50" stroke="rgba(59,130,246,0.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
            <line x1="150" y1="130" x2="250" y2="55" stroke="rgba(59,130,246,0.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
            <line x1="150" y1="130" x2="50" y2="200" stroke="rgba(59,130,246,0.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
            <line x1="150" y1="130" x2="255" y2="195" stroke="rgba(59,130,246,0.25)" stroke-width="1.5" stroke-dasharray="4 3"/>
          </svg>

          <div class="absolute top-2 left-2 phil-node animate-float-slow" style="animation-delay:0.3s">Kerja Tim</div>
          <div class="absolute top-4 right-0 phil-node animate-float" style="animation-delay:0.8s">Kreatif</div>
          <div class="absolute bottom-6 left-0 phil-node animate-float-slow" style="animation-delay:1.2s">Adaptif</div>
          <div class="absolute bottom-4 right-2 phil-node animate-float" style="animation-delay:0.5s">Belajar Terus</div>
        </div>
      </div>
    </div>
  </section>

  {{-- ========== CTA & FOOTER CONTACT ========== --}}
  <section id="kontak" class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
    <div class="grid lg:grid-cols-3 gap-6">
      {{-- Left: CTA --}}
      <div class="glass p-8 flex flex-col justify-center">
        <h2 class="font-grotesk font-bold text-3xl sm:text-4xl text-slate-800 leading-tight mb-3">
          MARI BERKOLABORASI
        </h2>
        <p class="text-slate-500 mb-6 text-sm leading-relaxed">
          Tertarik untuk bekerja sama atau ingin tahu lebih lanjut? Jangan ragu untuk menghubungi saya.
        </p>
        <a href="mailto:akuartzy@gmail.com" class="btn-primary w-fit">
          KIRIM EMAIL
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      {{-- Center: Contact Info --}}
      <div class="glass p-6">
        <h3 class="font-grotesk font-semibold text-lg text-slate-800 mb-5">Informasi Kontak</h3>
        <div class="space-y-4 text-sm">
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <p class="text-xs text-slate-400 font-medium">Email</p>
              <a href="mailto:akuartzy@gmail.com" class="text-slate-700 font-medium hover:text-blue-600 transition">akuartzy@gmail.com</a>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <p class="text-xs text-slate-400 font-medium">Telepon / WhatsApp</p>
              <a href="https://wa.me/6283105672190" class="text-slate-700 font-medium hover:text-blue-600 transition">0831-0567-2190</a>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="text-xs text-slate-400 font-medium">Lokasi</p>
              <p class="text-slate-700 font-medium">Cikalong Wetan, Bandung Barat<br>Jawa Barat, Indonesia</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
            <div>
              <p class="text-xs text-slate-400 font-medium">Sekolah</p>
              <p class="text-slate-700 font-medium">SMK Wyata Dharma</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Right: Connect card --}}
      <div class="glass p-6 flex flex-col items-center text-center">
        <div class="relative mb-4">
          <div class="w-24 h-24 rounded-full relative animate-float" style="background: radial-gradient(circle at 35% 35%, #e0f2fe, #7dd3fc 40%, #0ea5e9 70%, #0369a1); box-shadow: inset -8px -8px 20px rgba(0,0,0,0.2), 0 10px 30px rgba(14,165,233,0.3);">
            <div class="absolute top-3 left-4 w-6 h-4 rounded-full bg-white/40 blur-[2px]"></div>
          </div>
        </div>
        <div class="w-28 h-28 rounded-xl overflow-hidden border-2 border-white/80 shadow-inner mb-4 relative">
          <div class="absolute inset-0 qr-pattern opacity-90"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center shadow">
              <span class="font-grotesk font-bold text-blue-600 text-sm">AR</span>
            </div>
          </div>
        </div>
        <p class="font-grotesk font-bold text-sm text-slate-800 mb-1">MARI TERHUBUNG</p>
        <p class="text-xs text-slate-500 leading-relaxed">Hubungi saya melalui<br>email atau WhatsApp</p>
        <div class="flex gap-2 mt-4">
          <a href="mailto:akuartzy@gmail.com" class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-blue-50 transition" aria-label="Email">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </a>
          <a href="https://wa.me/6283105672190" class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-green-50 transition" aria-label="WhatsApp">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ========== FOOTER ========== --}}
  <footer class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-8">
    <div class="glass px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-xs text-slate-500">© 2026 A. Ramdan Fitaya. Semua hak dilindungi.</p>
      <div class="flex items-center gap-2">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="#93c5fd"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <span class="text-xs font-semibold tracking-widest text-slate-400 uppercase">Belajar · Berkembang · Berkarya</span>
      </div>
    </div>
  </footer>

  {{-- ========== JAVASCRIPT ========== --}}
  <script>
    const observerOptions = {
      threshold: 0.3,
      rootMargin: '0px'
    };

    const progressObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const fills = entry.target.querySelectorAll('.progress-fill');
          fills.forEach(fill => {
            const width = fill.getAttribute('data-width');
            fill.style.width = width + '%';
          });
          progressObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const skillsContainer = document.getElementById('skills-container');
    if (skillsContainer) {
      progressObserver.observe(skillsContainer);
    }

    document.addEventListener('mousemove', (e) => {
      const orbs = document.querySelectorAll('.ambient-orb');
      const x = (e.clientX / window.innerWidth - 0.5) * 20;
      const y = (e.clientY / window.innerHeight - 0.5) * 20;
      orbs.forEach((orb, i) => {
        const factor = (i + 1) * 0.4;
        orb.style.transform = `translate(${x * factor}px, ${y * factor}px)`;
      });
    });

    document.querySelectorAll('.btn-primary, .btn-secondary').forEach(btn => {
      btn.addEventListener('mousedown', () => {
        btn.style.transform = 'scale(0.97)';
      });
      btn.addEventListener('mouseup', () => {
        btn.style.transform = '';
      });
      btn.addEventListener('mouseleave', () => {
        btn.style.transform = '';
      });
    });
  </script>
</body>
</html>