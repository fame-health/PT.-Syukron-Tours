<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>Buku Panduan Sayembara Video - Syukron Tour</title>
    <meta name="title" content="Buku Panduan Sayembara Video - Syukron Tour">
    <meta name="description"
        content="Panduan lengkap sayembara video Haji Ekspres Syukron Tour dengan total hadiah lebih dari Rp 3 juta">
    <meta name="keywords"
        content="sayembara video, haji ekspres, syukron tour, kompetisi video, hadiah jutaan">
    <meta name="author" content="Syukron Tour">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://syukrontour.com/panduan-sayembara">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Syukron Tour">
    <meta property="og:title" content="Buku Panduan Sayembara Video - Haji Ekspres | Syukron Tour">
    <meta property="og:description"
        content="Ikuti sayembara video Haji Ekspres dengan hadiah total lebih dari Rp 3 juta. Panduan lengkap dan syarat ketentuan.">
    <meta property="og:image" content="https://syukrontour.com/images/og-image-sayembara.jpg">
    <meta property="og:url" content="https://syukrontour.com/panduan-sayembara">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@syukrontour">
    <meta name="twitter:creator" content="@syukrontour">
    <meta name="twitter:title" content="Buku Panduan Sayembara Video - Haji Ekspres | Syukron Tour">
    <meta name="twitter:description"
        content="Ikuti sayembara video Haji Ekspres dengan hadiah total lebih dari Rp 3 juta">
    <meta name="twitter:image" content="https://syukrontour.com/images/twitter-card-sayembara.jpg">

    <!-- Favicon Section for Laravel -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Styles -->
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

        /* Section Animation */
        .section-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .section-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Glassmorphism effect */
        .glass-morphism {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
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

        /* Prize animation */
        .prize-card {
            transition: all 0.3s ease;
        }

        .prize-card:hover {
            transform: scale(1.05) translateY(-10px);
        }

        /* Timeline styles */
        .timeline-item {
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            background: #0ea5e9;
            border-radius: 50%;
        }

        /* Responsive Timeline */
        @media (max-width: 640px) {
            .timeline-item {
                flex-direction: column;
                align-items: flex-start;
                padding: 1rem;
            }
            .timeline-item::before {
                left: 0;
                top: 10px;
            }
            .timeline-item > div:first-child {
                margin-bottom: 0.5rem;
                margin-right: 0;
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
                min-width: auto;
            }
            .timeline-item > div:last-child {
                padding-left: 1.5rem;
            }
            .timeline-item i {
                font-size: 0.9rem;
            }
            .timeline-item span {
                font-size: 0.9rem;
            }
        }

        /* Warning pulse animation */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .warning-pulse {
            animation: pulse 2s infinite;
        }

        /* Floating animation for WhatsApp button */
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }

        /* Section numbering */
        .section-number {
            background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 100%);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2em;
            margin-right: 15px;
            flex-shrink: 0;
        }

        @media (max-width: 640px) {
            .section-number {
                width: 40px;
                height: 40px;
                font-size: 1em;
            }
        }

        /* Print styles */
        @media print {
            .floating-animation,
            nav,
            .cta-section {
                display: none !important;
            }

            .card-hover:hover {
                transform: none;
                box-shadow: none;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 100%);
            border-radius: 4px;
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
                    <a href="/tentang-kami" class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        Tentang Kami
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/panduan-sayembara" class="nav-link relative text-yellow-600 font-semibold transition-colors duration-300 group">
                        Panduan Sayembara
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-yellow-600 transition-all duration-300"></span>
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
                <a href="/faq" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg transition-colors">FAQ</a>
                <a href="/tentang-kami" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">Tentang Kami</a>
                <a href="/kebijakan-privasi" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">Kebijakan dan Privasi</a>
                <a href="/panduan-sayembara" class="block py-3 px-4 text-yellow-600 font-semibold bg-yellow-50 rounded-lg">Panduan Sayembara</a>
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
            <div class="text-center section-item">
                <div class="inline-flex items-center justify-center w-20 h-20 gradient-bg rounded-full mb-6">
                    <i class="fas fa-video text-3xl text-white"></i>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">
                    📖 BUKU PANDUAN SAYEMBARA VIDEO
                </h1>
                <div class="text-2xl md:text-3xl font-bold text-blue-700 mb-4">
                    "HAJI EKSPRES: Capture the Luxury with Syukron Tours!"
                </div>
                <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full text-blue-800 font-semibold mb-8">
                    PT FARIKA WISATA ABADA - SK PPIU: 12580003521590001
                </div>
                <p class="text-lg text-blue-600 max-w-2xl mx-auto">
                    Panduan lengkap untuk mengikuti sayembara video dengan total hadiah lebih dari Rp 3.000.000
                </p>
            </div>
        </div>
    </section>

    <!-- Consolidated Guide Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-item bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 card-hover">
                <h2 class="text-4xl font-bold text-blue-800 mb-8 text-center">PANDUAN LENGKAP SAYEMBARA VIDEO</h2>

                <!-- I. Nama Sayembara -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">I</div>
                        <h3 class="text-2xl font-bold text-blue-700">Nama Sayembara</h3>
                    </div>
                    <div class="bg-gradient-to-r from-orange-100 to-yellow-100 border-l-4 border-orange-500 p-6 rounded-lg text-center">
                        <p class="text-xl font-bold text-orange-700">"HAJI EKSPRES: Capture the Luxury with Syukron Tours!"</p>
                    </div>
                </div>

                <!-- II. Fokus Promosi -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">II</div>
                        <h3 class="text-2xl font-bold text-blue-700">Fokus Promosi</h3>
                    </div>
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-6">
                        <p class="text-lg font-semibold text-red-700">
                            <strong>Syarat wajib:</strong> Video harus menyoroti minimal 1 dari 3 keunggulan Haji Express Syukron Tours
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover border-t-4 border-green-500">
                            <div class="text-center mb-4">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                                    <i class="fas fa-bolt text-2xl text-green-600"></i>
                                </div>
                                <h4 class="text-xl font-bold text-green-700">1. ⚡ Kecepatan</h4>
                            </div>
                            <p class="text-gray-600 text-center">Proses administrasi < 3 bulan</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover border-t-4 border-purple-500">
                            <div class="text-center mb-4">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                                    <i class="fas fa-hotel text-2xl text-purple-600"></i>
                                </div>
                                <h4 class="text-xl font-bold text-purple-700">2. 🏨 Fasilitas Eksklusif</h4>
                            </div>
                            <p class="text-gray-600 text-center">Akomodasi bintang 5, transportasi VIP</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover border-t-4 border-blue-500">
                            <div class="text-center mb-4">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                                    <i class="fas fa-check-circle text-2xl text-blue-600"></i>
                                </div>
                                <h4 class="text-xl font-bold text-blue-700">3. ✅ Jaminan Kuota Pasti</h4>
                            </div>
                            <p class="text-gray-600 text-center">Kepastian keberangkatan terjamin</p>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <p class="text-lg font-semibold text-red-600 bg-red-50 p-4 rounded-lg">
                            Peserta wajib menyebut minimal 1 poin di video
                        </p>
                    </div>
                </div>

                <!-- III. Periode Lomba -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">III</div>
                        <h3 class="text-2xl font-bold text-blue-700">Periode Lomba</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="timeline-item flex items-center bg-white p-6 sm:p-4 rounded-lg shadow-md">
                            <div class="bg-green-500 text-white px-6 sm:px-3 py-3 sm:py-2 rounded-full font-bold text-center min-w-[120px] sm:min-w-[100px] flex-shrink-0 mr-6 sm:mr-4">
                                1 – 15 Sept 2025
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-edit text-green-600 text-xl sm:text-base mr-3"></i>
                                <span class="text-lg sm:text-sm font-semibold">📝 Pendaftaran</span>
                            </div>
                        </div>
                        <div class="timeline-item flex items-center bg-white p-6 sm:p-4 rounded-lg shadow-md">
                            <div class="bg-blue-500 text-white px-6 sm:px-3 py-3 sm:py-2 rounded-full font-bold text-center min-w-[120px] sm:min-w-[100px] flex-shrink-0 mr-6 sm:mr-4">
                                16 – 25 Sept 2025
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-vote-yea text-blue-600 text-xl sm:text-base mr-3"></i>
                                <span class="text-lg sm:text-sm font-semibold">🗳️ Voting</span>
                            </div>
                        </div>
                        <div class="timeline-item flex items-center bg-white p-6 sm:p-4 rounded-lg shadow-md">
                            <div class="bg-yellow-500 text-white px-6 sm:px-3 py-3 sm:py-2 rounded-full font-bold text-center min-w-[120px] sm:min-w-[100px] flex-shrink-0 mr-6 sm:mr-4">
                                30 Sept 2025
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-trophy text-yellow-600 text-xl sm:text-base mr-3"></i>
                                <span class="text-lg sm:text-sm font-semibold">🏆 Pengumuman Pemenang</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IV. Kriteria Video -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">IV</div>
                        <h3 class="text-2xl font-bold text-blue-700">Kriteria Video (Wajib Dipenuhi)</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-blue-700 mb-4">1. Tema Konten</h4>
                            <div class="bg-gradient-to-r from-yellow-100 to-orange-100 border-l-4 border-yellow-500 p-6 rounded-lg">
                                <div class="text-lg font-bold text-yellow-700 mb-2">
                                    "Pengalaman Haji Tanpa Ribet? Ini Solusinya!"
                                </div>
                                <p class="text-yellow-600">Format boleh: Storytelling, testimoni fiktif, atau animasi.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-blue-700 mb-4">2. Elemen Branding (Wajib)</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span>Logo <strong>Syukron Tours</strong> di awal/akhir video (min. 5 detik)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span>Mention akun Instagram: <strong>@SyukronTours</strong></span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                    <span>Gunakan hashtag: <strong>#HajiExpressSyukron #HajiTanpaRibet</strong></span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-blue-700 mb-4">3. Teknis Video</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-clock text-blue-500 mt-1 mr-3"></i>
                                    <span>Durasi: 15 – 60 detik (optimasi TikTok/Reels)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-mobile-alt text-blue-500 mt-1 mr-3"></i>
                                    <span>Format: Vertikal (9:16)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-video text-blue-500 mt-1 mr-3"></i>
                                    <span>Kualitas: HD minimal 1080p</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-red-50 rounded-xl p-6 border border-red-200 warning-pulse">
                            <h4 class="text-xl font-bold text-red-700 mb-4 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                4. ⚠️ Larangan
                            </h4>
                            <ul class="space-y-2 text-red-600">
                                <li class="flex items-start">
                                    <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                    <span>Konten mengandung unsur komersial kompetitor</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                    <span>Mengandung musik</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                    <span>Mengandung avatar AI</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- V. Mekanisme Lomba -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">V</div>
                        <h3 class="text-2xl font-bold text-blue-700">Mekanisme Lomba</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-blue-50 rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-blue-700 mb-4">1. Cara Ikut</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-upload text-blue-500 mt-1 mr-3"></i>
                                    <span>Upload video ke <strong>Instagram Reels</strong> atau <strong>TikTok</strong></span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-users text-blue-500 mt-1 mr-3"></i>
                                    <span>Follow <strong>@SyukronTours</strong> & tag <strong>3 teman</strong> di kolom komentar</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-green-50 rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-green-700 mb-4">2. Sistem Penilaian</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span>Jumlah Like Valid</span>
                                    <span class="font-bold text-green-600">50%</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span>Kreativitas promosi</span>
                                    <span class="font-bold text-green-600">30%</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span>Kualitas visual & audio</span>
                                    <span class="font-bold text-green-600">20%</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">(hitung manual via tim)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VI. Hadiah -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number bg-yellow-500">VI</div>
                        <h3 class="text-2xl font-bold text-blue-700">Hadiah</h3>
                    </div>
                    <div class="gradient-bg rounded-2xl p-8 text-white text-center mb-8">
                        <h4 class="text-3xl font-bold mb-4">🏆 TOTAL NILAI > Rp 3.000.000</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                            <div class="prize-card bg-white/20 backdrop-blur-sm p-6 rounded-xl">
                                <div class="text-3xl mb-2">🥇</div>
                                <div class="text-2xl font-bold mb-2">Rp 1.000.000</div>
                                <div class="text-lg">Juara 1</div>
                            </div>
                            <div class="prize-card bg-white/20 backdrop-blur-sm p-6 rounded-xl">
                                <div class="text-3xl mb-2">🥈</div>
                                <div class="text-2xl font-bold mb-2">Rp 700.000</div>
                                <div class="text-lg">Juara 2</div>
                            </div>
                            <div class="prize-card bg-white/20 backdrop-blur-sm p-6 rounded-xl">
                                <div class="text-3xl mb-2">🥉</div>
                                <div class="text-2xl font-bold mb-2">Rp 500.000</div>
                                <div class="text-lg">Juara 3</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-green-100 to-emerald-100 border-4 border-dashed border-green-500 rounded-2xl p-8 text-center">
                        <h4 class="text-2xl font-bold text-green-800 mb-4">🎁 BONUS SPESIAL</h4>
                        <div class="text-4xl font-bold text-green-700 mb-4">Rp 10.000.000</div>
                        <p class="text-lg text-green-600">
                            Untuk peserta yang berhasil membawa jamaah mendaftar Haji melalui Syukron Tours
                        </p>
                    </div>
                </div>

                <!-- VII. Ketentuan Legal -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">VII</div>
                        <h3 class="text-2xl font-bold text-blue-700">Ketentuan Legal</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-blue-50 rounded-xl p-6 shadow-lg">
                            <h4 class="text-xl font-bold text-blue-700 mb-4">Hak dan Kewajiban</h4>
                            <ol class="space-y-2 list-decimal list-inside text-gray-700">
                                <li>Hak cipta video menjadi milik Syukron Tours</li>
                                <li>Peserta menyetujui penggunaan videonya untuk iklan</li>
                            </ol>
                        </div>
                        <div class="bg-red-50 rounded-xl p-6 border border-red-200">
                            <h4 class="text-xl font-bold text-red-700 mb-4 flex items-center">
                                <i class="fas fa-ban mr-2"></i>
                                ⚠️ Diskualifikasi Otomatis
                            </h4>
                            <ul class="space-y-2 text-red-600">
                                <li class="flex items-start">
                                    <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                    <span>Akun privat</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                                    <span>Pembelian like/views terdeteksi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- VIII. Strategi Viralitas -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="section-number">VIII</div>
                        <h3 class="text-2xl font-bold text-blue-700">Strategi Viralitas</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-purple-700 mb-4 flex items-center">
                                <i class="fas fa-palette mr-3"></i>
                                1. 🎨 Template Siap Pakai
                            </h4>
                            <p class="text-gray-600">
                                Sediakan <em>asset pack</em> gratis di website Syukron Tours (logo animasi, soundbite azan, musik syariah)
                            </p>
                        </div>
                        <div class="bg-gradient-to-r from-cyan-100 to-blue-100 border-4 border-dashed border-cyan-500 rounded-2xl p-8 text-center">
                            <h4 class="text-2xl font-bold text-cyan-800 mb-4">
                                <i class="fas fa-rocket mr-2"></i>
                                2. 🚀 Challenge Boost
                            </h4>
                            <div class="text-3xl font-bold text-cyan-700 mb-4">Bonus Rp 100.000</div>
                            <p class="text-lg text-cyan-600">untuk video dengan >1.000 share</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-lg card-hover">
                            <h4 class="text-xl font-bold text-pink-700 mb-4 flex items-center">
                                <i class="fas fa-tv mr-3"></i>
                                3. 📺 Hyping Moment
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="fas fa-play-circle text-pink-500 mt-1 mr-3"></i>
                                    <span>Live "Unboxing Hadiah" di Instagram saat pengumuman pemenang</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-star text-pink-500 mt-1 mr-3"></i>
                                    <span>Feature video peserta di website resmi Syukron Tours</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg cta-section">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="section-item">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Siap Ikut Sayembara?
                </h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    Mulai buat video kreatifmu sekarang dan menangkan hadiah jutaan rupiah!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/62818569111" target="_blank"
                        class="inline-flex items-center justify-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-2 text-xl"></i>
                        Tanya Detail Sayembara
                    </a>
                    <a href="/"
                        class="inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-home mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex-shrink-0 flex items-center space-x-3">
                        <div class="items-center justify-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                                class="w-40 h-26 object-contain" />
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6">Melayani perjalanan haji dan umroh dengan penuh amanah dan berkah sejak 2012.</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="https://wa.me/62818569111"
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
                        <li><a href="#" class="hover:text-white transition-colors">Haji Express</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Umroh Reguler</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Umroh VIP</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Konsultasi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/tentang-kami" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="/syarat-ketentuan" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="/kebijakan-privasi" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
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
                <p>&copy; 2012 - {{ date('Y') }} Syukron Tours ❤️ Semoga Allah SWT meridhai perjalanan haji Anda.</p>
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

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    mobileMenu.classList.toggle('active');
                });
            }

            // Intersection Observer for animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            // Observe all section items
            document.querySelectorAll('.section-item').forEach((item) => {
                observer.observe(item);
            });

            // Navbar background change on scroll
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white', 'shadow-lg');
                    navbar.classList.remove('glass-morphism');
                } else {
                    navbar.classList.add('glass-morphism');
                    navbar.classList.remove('bg-white', 'shadow-lg');
                }
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Print functionality
            document.addEventListener('keydown', function(e) {
                if (e.ctrlKey && e.key === 'p') {
                    window.print();
                }
            });
        });
    </script>

    <script src="/build/assets/app-C6t145CM.js" defer></script>

</body>
</html>
