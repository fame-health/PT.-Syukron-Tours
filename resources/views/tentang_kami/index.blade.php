<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Primary Meta Tags -->
  <title>Tentang Kami - Syukron Tour</title>
  <meta name="title" content="Tentang Kami | Syukron Tour">
  <meta name="description" content="Ketahui lebih lanjut tentang Syukron Tour, travel umroh terpercaya sejak 2008. Kami menawarkan pelayanan amanah dengan izin resmi Kemenag RI.">
  <meta name="keywords" content="tentang kami, travel umroh, umroh terpercaya, Syukron Tour, izin resmi umroh, pelayanan umroh, sejarah travel umroh">
  <meta name="author" content="Syukron Tour">
  <meta name="robots" content="index, follow">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://syukrontour.com/tentang-kami">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Syukron Tour">
  <meta property="og:title" content="Tentang Kami | Syukron Tour">
  <meta property="og:description" content="Pelajari sejarah, visi, misi, dan komitmen Syukron Tour dalam melayani jamaah umroh dengan penuh amanah sejak 2008.">
  <meta property="og:image" content="https://syukrontour.com/images/tentang-kami-umroh.jpg">
  <meta property="og:image:alt" content="Masjidil Haram - Syukron Tour">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:url" content="https://syukrontour.com/tentang-kami">
  <meta property="og:locale" content="id_ID">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Tentang Kami | Syukron Tour">
  <meta name="twitter:description" content="Pelajari sejarah, visi, misi, dan komitmen Syukron Tour dalam melayani jamaah umroh dengan penuh amanah sejak 2008.">
  <meta name="twitter:image" content="https://syukrontour.com/images/tentang-kami-umroh.jpg">
  <meta name="twitter:image:alt" content="Masjidil Haram - Syukron Tour">
  <meta name="twitter:site" content="@MudarisWisata">
  <meta name="twitter:creator" content="@MudarisWisata">

  <!-- Additional SEO Meta Tags -->
  <meta name="geo.region" content="ID-RI">
  <meta name="geo.placename" content="Pekanbaru, Riau">
  <meta name="geo.position" content="-0.507068;101.447777">
  <meta name="ICBM" content="-0.507068, 101.447777">
  <meta name="language" content="Indonesian">

  <!-- Favicon Section -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">

  <!-- Structured Data (JSON-LD) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Syukron Tour",
    "url": "https://syukrontour.com",
    "logo": "https://syukrontour.com/assets/images/logo.png",
    "description": "Syukron Tour adalah travel umroh terpercaya sejak 2008, berizin resmi dari Kementerian Agama RI, melayani jamaah dengan penuh amanah.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Pekanbaru",
      "addressLocality": "Pekanbaru",
      "addressRegion": "Riau",
      "postalCode": "",
      "addressCountry": "ID"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+6282184808256",
      "contactType": "Customer Service",
      "email": "mudariswisata@gmail.com",
      "availableLanguage": ["Indonesian"]
    },
    "sameAs": [
      "https://www.facebook.com/mudariswisata",
      "https://www.instagram.com/mudariswisata",
      "https://wa.me/6285211451111"
    ]
  }
  </script>

  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

    * {
      font-family: 'Poppins', sans-serif;
    }

    /* Warna utama biru (gradient identik biru) */
    .gradient-bg {
      background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 50%, #6366f1 100%);
    }

    /* Hero section biru muda */
    .hero-gradient {
      background: linear-gradient(135deg, #dbeafe 0%, #93c5fd 50%, #60a5fa 100%);
    }

    /* Hover effect card */
    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* kebijakan-privasi Accordion Animation */
    .kebijakan-privasi-content {
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .kebijakan-privasi-content.active {
      max-height: 500px;
    }

    .kebijakan-privasi-toggle {
      transition: transform 0.3s ease;
    }

    .kebijakan-privasi-toggle.active {
      transform: rotate(180deg);
    }

    /* Fade-in animation */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Glassmorphism effect */
    .glass-morphism {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }

    /* Search box styling */
    .search-box {
      position: relative;
    }

    .search-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, #f59e0b, #f97316);
      border-radius: 15px;
      padding: 2px;
      z-index: -1;
    }

    .search-box input {
      background: white;
      border-radius: 13px;
    }

    /* Category buttons */
    .category-btn {
      transition: all 0.3s ease;
    }

    .category-btn.active {
      background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 50%, #6366f1 100%);
      color: white;
      transform: translateY(-2px);
    }

    /* Mobile menu animation */
    #mobile-menu {
      transition: all 0.3s ease;
      max-height: 0;
      overflow: hidden;
    }

    #mobile-menu.active {
      max-height: 500px;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">

  <!-- Navbar -->
<nav class="glass-morphism fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20 items-center">
      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center space-x-3">
        <div class="flex items-center justify-center">
          <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
               class="w-32 h-16 sm:w-40 sm:h-20 object-contain rounded-lg" />
        </div>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-8" id="desktopMenu">
        <a href="/" class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
          Beranda
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="/hotel" class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
          Hotel
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="/kebijakan-privasi" class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
          Kebijakan dan Privasi
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="/faq" class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
          FAQ
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="/tentang-kami" class="nav-link relative text-yellow-600 font-semibold transition-colors duration-300 group">
          Tentang Kami
          <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-yellow-600 transition-all duration-300"></span>
        </a>
        <a href="/syarat-ketentuan" class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
          Syarat dan Ketentuan
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
      </div>

      <!-- CTA Desktop -->
      <div class="hidden md:flex">
        <button class="gradient-bg text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
          Konsultasi Gratis
        </button>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-btn" class="text-gray-700 hover:text-yellow-600 transition-colors">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden glass-morphism absolute top-20 left-0 right-0 w-full z-50">
    <div class="px-4 pt-2 pb-6 space-y-4 bg-white shadow-md rounded-b-xl">
      <a href="/" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg transition-colors">Beranda</a>
      <a href="/hotel" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg transition-colors">Hotel</a>
      <a href="/faq" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">FAQ</a>
      <a href="/tentang-kami" class="block py-3 px-4 text-yellow-600 font-semibold bg-yellow-50 rounded-lg">Tentang Kami</a>
      <a href="/kebijakan-privasi" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">Kebijakan dan Privasi</a>
      <a href="/syarat-ketentuan" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">Syarat dan Ketentuan</a>
      <button class="w-full gradient-bg text-white px-6 py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
        Konsultasi Gratis
      </button>
    </div>
  </div>
</nav>


  <!-- Hero Section -->
  <section class="pt-32 pb-20 hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 bg-white/10"></div>
    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <div class="text-center fade-in">
        <div class="inline-flex items-center justify-center w-20 h-20 gradient-bg rounded-full mb-6">
          <i class="fas fa-users text-3xl text-white"></i>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">
          Tentang Kami
        </h1>
        <p class="text-xl md:text-2xl text-blue-700 mb-8 max-w-3xl mx-auto">
          Membantu mewujudkan impian ibadah umroh dengan pelayanan terbaik dan penuh amanah
        </p>
      </div>
    </div>
  </section>

  <!-- Search & Filter Section -->
  <section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4">
      <div class="flex flex-col md:flex-row gap-6 items-center justify-between">
        <!-- Search Box -->
        <div class="search-box w-full md:w-2/3">
          <div class="relative">
            <input
              type="text"
              id="searchFAQ"
              placeholder="Cari pertanyaan..."
              class="w-full px-6 py-4 pl-12 text-lg border-0 focus:ring-2 focus:ring-yellow-500 focus:outline-none"
            >
            <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
          </div>
        </div>

        <!-- Category Filter -->
        <div class="flex flex-wrap gap-2 w-full md:w-1/3 justify-center md:justify-end">
          <button class="category-btn active px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="all">
            Semua
          </button>
          <button class="category-btn px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="umum">
            Umum
          </button>
          <button class="category-btn px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="paket">
            Paket
          </button>
          <button class="category-btn px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="pembayaran">
            Pembayaran
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Tentang Kami Section -->
  <section id="tentang" class="py-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <div class="max-w-7xl mx-auto px-4">
      <!-- Section Header -->
      <div class="text-center mb-16 fade-in">
        <div class="inline-flex items-center justify-center w-20 h-20 gradient-bg rounded-full mb-6">
          <i class="fas fa-users text-3xl text-white"></i>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">
          Tentang Kami
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Membantu mewujudkan impian ibadah umroh dengan pelayanan terbaik dan penuh amanah
        </p>
      </div>

      <!-- Main Content Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
        <!-- Left Content -->
        <div class="fade-in">
          <div class="space-y-6">
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fas fa-kaaba text-white text-lg"></i>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Sejarah Perusahaan</h3>
                <p class="text-gray-600 leading-relaxed">
                  Syukron Tour didirikan pada tahun 2008 dengan visi mulia untuk membantu umat Muslim Indonesia menunaikan ibadah umroh. Berawal dari impian sederhana untuk melayani jamaah dengan penuh amanah, kini kami telah berkembang menjadi salah satu travel umroh terpercaya di Indonesia.
                </p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fas fa-certificate text-white text-lg"></i>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Legalitas & Izin</h3>
                <p class="text-gray-600 leading-relaxed">
                  Kami beroperasi dengan izin resmi dari Kementerian Agama Republik Indonesia dan telah terakreditasi sebagai Penyelenggara Perjalanan Ibadah Umroh (PPIU). Semua layanan kami dijamin halal dan sesuai dengan ketentuan syariah Islam.
                </p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fas fa-heart text-white text-lg"></i>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Komitmen Kami</h3>
                <p class="text-gray-600 leading-relaxed">
                  Dengan pengalaman lebih dari 15 tahun, kami berkomitmen memberikan pelayanan terbaik untuk setiap jamaah. Kepuasan dan kenyamanan Anda adalah prioritas utama kami dalam setiap perjalanan ibadah.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Content - Image -->
        <div class="fade-in">
          <div class="relative">
            <div class="absolute inset-0 gradient-bg rounded-2xl transform rotate-3"></div>
            <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                 alt="Kaaba dan Masjidil Haram"
                 class="relative z-10 w-full h-96 object-cover rounded-2xl shadow-2xl">
            <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-yellow-400 rounded-full opacity-20"></div>
            <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-400 rounded-full opacity-20"></div>
          </div>
        </div>
      </div>

      <!-- Vision & Mission -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        <div class="fade-in">
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-6">
              <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-eye text-2xl text-white"></i>
              </div>
              <h3 class="text-2xl font-bold text-gray-800">Visi Kami</h3>
            </div>
            <p class="text-gray-600 leading-relaxed text-lg">
              Menjadi perusahaan travel umroh terdepan di Indonesia yang memberikan pelayanan berkualitas tinggi, terpercaya, dan penuh berkah untuk setiap jamaah dalam menunaikan ibadah umroh.
            </p>
          </div>
        </div>

        <div class="fade-in">
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-6">
              <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-bullseye text-2xl text-white"></i>
              </div>
              <h3 class="text-2xl font-bold text-gray-800">Misi Kami</h3>
            </div>
            <ul class="text-gray-600 leading-relaxed text-lg space-y-2">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                Menyediakan paket umroh berkualitas dengan harga terjangkau
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                Memberikan bimbingan spiritual yang mendalam
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                Memastikan kenyamanan dan keamanan setiap jamaah
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                Melayani dengan penuh amanah dan profesional
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Company Values -->
      <div class="fade-in">
        <div class="text-center mb-12">
          <h3 class="text-3xl font-bold text-gray-800 mb-4">Nilai-Nilai Perusahaan</h3>
          <p class="text-gray-600 text-lg">Prinsip-prinsip yang memandu setiap langkah perjalanan kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-handshake text-2xl text-blue-600"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 mb-2">Amanah</h4>
            <p class="text-gray-600">Menjaga kepercayaan jamaah dengan integritas tinggi</p>
          </div>

          <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-star text-2xl text-green-600"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 mb-2">Profesional</h4>
            <p class="text-gray-600">Melayani dengan standar kualitas internasional</p>
          </div>

          <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-heart text-2xl text-yellow-600"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 mb-2">Peduli</h4>
            <p class="text-gray-600">Mengutamakan kenyamanan dan kepuasan jamaah</p>
          </div>

          <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-infinity text-2xl text-purple-600"></i>
            </div>
            <h4 class="text-xl font-bold text-gray-800 mb-2">Berkelanjutan</h4>
            <p class="text-gray-600">Terus berinovasi untuk pelayanan terbaik</p>
          </div>
        </div>
      </div>

      <!-- Statistics -->
      <div class="mt-20 fade-in">
        <div class="gradient-bg rounded-2xl p-8 md:p-12 text-white text-center">
          <h3 class="text-3xl font-bold mb-8">Pencapaian Kami</h3>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
              <div class="text-4xl md:text-5xl font-bold mb-2">15+</div>
              <div class="text-blue-100 text-lg">Tahun Pengalaman</div>
            </div>
            <div>
              <div class="text-4xl md:text-5xl font-bold mb-2">5000+</div>
              <div class="text-blue-100 text-lg">Jamaah Terlayani</div>
            </div>
            <div>
              <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
              <div class="text-blue-100 text-lg">Tingkat Kepuasan</div>
            </div>
            <div>
              <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
              <div class="text-blue-100 text-lg">Layanan Support</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="mt-20 fade-in">
        <div class="text-center mb-12">
          <h3 class="text-3xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h3>
          <p class="text-gray-600 text-lg">Keunggulan yang membedakan kami dari yang lain</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-shield-alt text-white"></i>
              </div>
              <h4 class="text-xl font-bold text-gray-800">Terpercaya</h4>
            </div>
            <p class="text-gray-600">Izin resmi dari Kemenag RI dan track record yang terbukti selama 15+ tahun</p>
          </div>

          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-dollar-sign text-white"></i>
              </div>
              <h4 class="text-xl font-bold text-gray-800">Harga Terjangkau</h4>
            </div>
            <p class="text-gray-600">Paket umroh dengan harga kompetitif tanpa mengurangi kualitas pelayanan</p>
          </div>

          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-user-tie text-white"></i>
              </div>
              <h4 class="text-xl font-bold text-gray-800">Pembimbing Berpengalaman</h4>
            </div>
            <p class="text-gray-600">Tim pembimbing yang berpengalaman dan memahami kebutuhan jamaah</p>
          </div>

          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-bed text-white"></i>
              </div>
              <h4 class="text-xl font-bold text-gray-800">Hotel Berkualitas</h4>
            </div>
            <p class="text-gray-600">Pilihan hotel 3-5 bintang dengan lokasi strategis dekat Masjidil Haram</p>
          </div>

          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-plane text-white"></i>
              </div>
              <h4 class="text-xl font-bold text-gray-800">Transportasi Nyaman</h4>
            </div>
            <p class="text-gray-600">Maskapai ternama dengan jadwal penerbangan yang fleksibel</p>
          </div>

          <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-headset text-white"></i>
              </div>
              <h4 class="text-xl font-bold text-gray-800">Support 24/7</h4>
            </div>
            <p class="text-gray-600">Layanan customer service yang siap membantu Anda kapan saja</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 gradient-bg">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <div class="fade-in">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
          Masih Ada Pertanyaan?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
          Tim customer service kami siap membantu Anda 24/7 untuk menjawab semua pertanyaan seputar umroh
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="https://wa.me/62818569111" target="_blank" class="inline-flex items-center justify-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-2 text-xl"></i>
            Chat WhatsApp
          </a>
          <a href="tel:+62818569111" class="inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-2"></i>
            Telepon Sekarang
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex-shrink-0 flex items-center space-x-3">
                        <div class=" items-center justify-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                                class="w-40 h-26 object-contain" />
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6">Melayani perjalanan umroh dengan penuh amanah dan berkah sejak 2012.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 hover:text-white transition-colors">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                        <a href="#"
                            class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#paket" class="hover:text-white transition-colors">Umroh Reguler</a></li>
                        <li><a href="#paket" class="hover:text-white transition-colors">Umroh VIP</a></li>
                        <li><a href="#paket" class="hover:text-white transition-colors">Umroh Keluarga</a></li>
                        <li><a href="#kontak" class="hover:text-white transition-colors">Konsultasi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/tentang-kami" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="/syarat-ketentuan" class="hover:text-white transition-colors">Syarat &
                                Ketentuan</a></li>
                        <li><a href="/kebijakan-privasi" class="hover:text-white transition-colors">Kebijakan
                                Privasi</a></li>
                        <li><a href="/faq" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            +6281-8569-111
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            info@syukrontour.com
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Pekanbaru, Riau
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2012 - Syukron Tours ❤️ for jamaah Indonesia.</p>
            </div>
        </div>
    </footer>

  <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/62818569111" target="_blank"
            class="w-14 h-14 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center text-white shadow-lg hover:shadow-xl transition-all duration-300 floating-animation">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>

 <script src="/build/assets/app-C6t145CM.js" defer></script>

</body>
</html>
