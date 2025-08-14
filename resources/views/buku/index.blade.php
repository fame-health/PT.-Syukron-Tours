<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buku Panduan Sayembara Video - Syukron Tour</title>
    <meta name="description" content="Panduan lengkap sayembara video Haji Ekspres Syukron Tour dengan total hadiah lebih dari Rp 3 juta">
    <meta name="keywords" content="sayembara video, haji ekspres, syukron tour, kompetisi video, hadiah jutaan">
    <meta name="author" content="Syukron Tour">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="https://syukrontour.com/panduan-sayembara">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Syukron Tour">
    <meta property="og:title" content="Buku Panduan Sayembara Video - Haji Ekspres | Syukron Tour">
    <meta property="og:description" content="Ikuti sayembara video Haji Ekspres dengan hadiah total lebih dari Rp 3 juta. Panduan lengkap dan syarat ketentuan.">
    <meta property="og:image" content="https://syukrontour.com/images/og-image-sayembara.jpg">
    <meta property="og:url" content="https://syukrontour.com/panduan-sayembara">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@syukrontour">
    <meta name="twitter:creator" content="@syukrontour">
    <meta name="twitter:title" content="Buku Panduan Sayembara Video - Haji Ekspres | Syukron Tour">
    <meta name="twitter:description" content="Ikuti sayembara video Haji Ekspres dengan hadiah total lebih dari Rp 3 juta">
    <meta name="twitter:image" content="https://syukrontour.com/images/twitter-card-sayembara.jpg">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        * { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 50%, #6366f1 100%); }
        .hero-gradient { background: linear-gradient(135deg, #dbeafe 0%, #93c5fd 50%, #60a5fa 100%); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); }
        .section-item { opacity: 0; transform: translateY(20px); transition: all 0.5s ease; }
        .section-item.visible { opacity: 1; transform: translateY(0); }
        .glass-morphism { background: rgba(255, 255, 255, 0.25); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.18); }
        #mobile-menu { transition: all 0.3s ease; max-height: 0; overflow: hidden; }
        #mobile-menu.active { max-height: 400px; }
        .prize-card { transition: all 0.3s ease; }
        .prize-card:hover { transform: scale(1.03) translateY(-5px); }
        .timeline-item { position: relative; }
        .timeline-item::before { content: ''; position: absolute; left: -10px; top: 50%; transform: translateY(-50%); width: 8px; height: 8px; background: #0ea5e9; border-radius: 50%; }
        @media (max-width: 640px) {
            .timeline-item { flex-direction: column; align-items: flex-start; padding: 0.75rem; }
            .timeline-item::before { left: 0; top: 8px; }
            .timeline-item > div:first-child { margin-bottom: 0.5rem; padding: 0.5rem; font-size: 0.8rem; }
            .timeline-item > div:last-child { padding-left: 1rem; }
            .timeline-item i, .timeline-item span { font-size: 0.85rem; }
        }
        @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.7; } }
        .warning-pulse { animation: pulse 2s infinite; }
        @keyframes floating { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-8px); } }
        .floating-animation { animation: floating 3s ease-in-out infinite; }
        .section-number { background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 100%); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1rem; margin-right: 10px; flex-shrink: 0; }
        @media (max-width: 640px) { .section-number { width: 32px; height: 32px; font-size: 0.9rem; } }
        @media print { .floating-animation, nav, .cta-section { display: none !important; } .card-hover:hover { transform: none; box-shadow: none; } }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 100%); border-radius: 3px; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">
    <nav class="glass-morphism fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-24 h-12 object-contain rounded-lg" />
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="/" class="text-gray-700 hover:text-yellow-600 transition-colors">Beranda</a>
                    <a href="/hotel" class="text-gray-700 hover:text-yellow-600 transition-colors">Hotel</a>
                    <a href="/kebijakan-privasi" class="text-gray-700 hover:text-yellow-600 transition-colors">Kebijakan dan Privasi</a>
                    <a href="/faq" class="text-gray-700 hover:text-yellow-600 transition-colors">FAQ</a>
                    <a href="/tentang-kami" class="text-gray-700 hover:text-yellow-600 transition-colors">Tentang Kami</a>
                    <a href="/panduan-sayembara" class="text-yellow-600 font-semibold">Panduan Sayembara</a>
                </div>
                <div class="hidden md:flex">
                    <button class="gradient-bg text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg hover:scale-105 transition-all">Konsultasi Gratis</button>
                </div>
                <div class="md:hidden">
                    <button id="menu-btn" class="text-gray-700 hover:text-yellow-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden glass-morphism w-full">
            <div class="px-4 pt-2 pb-4 space-y-2 bg-white shadow-md rounded-b-lg">
                <a href="/" class="block py-2 px-3 text-gray-700 hover:bg-yellow-50 rounded transition-colors">Beranda</a>
                <a href="/hotel" class="block py-2 px-3 text-gray-700 hover:bg-yellow-50 rounded transition-colors">Hotel</a>
                <a href="/faq" class="block py-2 px-3 text-gray-700 hover:bg-yellow-50 rounded transition-colors">FAQ</a>
                <a href="/tentang-kami" class="block py-2 px-3 text-gray-700 hover:bg-yellow-50 rounded transition-colors">Tentang Kami</a>
                <a href="/kebijakan-privasi" class="block py-2 px-3 text-gray-700 hover:bg-yellow-50 rounded transition-colors">Kebijakan dan Privasi</a>
                <a href="/panduan-sayembara" class="block py-2 px-3 text-yellow-600 font-semibold bg-yellow-50 rounded">Panduan Sayembara</a>
                <button class="w-full gradient-bg text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all">Konsultasi Gratis</button>
            </div>
        </div>
    </nav>
    <section class="pt-24 pb-12 hero-gradient relative overflow-hidden">
        <div class="absolute inset-0 bg-white/10"></div>
        <div class="max-w-5xl mx-auto px-4 relative z-10">
            <div class="text-center section-item">
                <div class="inline-flex items-center justify-center w-16 h-16 gradient-bg rounded-full mb-4">
                    <i class="fas fa-video text-2xl text-white"></i>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">📖 BUKU PANDUAN SAYEMBARA VIDEO</h1>
                <div class="text-lg sm:text-xl font-bold text-blue-700 mb-3">"HAJI EKSPRES: Capture the Luxury with Syukron Tours!"</div>
                <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-blue-800 text-sm font-semibold mb-6">PT FARIKA WISATA ABADA - SK PPIU: 12580003521590001</div>
                <p class="text-sm sm:text-base text-blue-600 max-w-xl mx-auto">Panduan lengkap untuk mengikuti sayembara video dengan total hadiah lebih dari Rp 3.000.000</p>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white" id="syarat-ketentuan">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-10 section-item">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">📋 Syarat & Ketentuan Lomba</h2>
                <p class="text-sm text-gray-600 max-w-xl mx-auto">Baca dengan teliti syarat dan ketentuan berikut sebelum berpartisipasi</p>
            </div>
            <div class="grid grid-cols-1 gap-6">
                <div class="section-item">
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover border-l-4 border-blue-500">
                        <div class="flex items-center mb-4">
                            <div class="section-number">1</div>
                            <h3 class="text-xl font-bold text-gray-800">Peserta</h3>
                        </div>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start"><i class="fas fa-users text-blue-500 mt-1 mr-2"></i>Terbuka untuk umum</li>
                            <li class="flex items-start"><i class="fab fa-instagram text-pink-500 mt-1 mr-2"></i>Wajib follow Instagram: <strong>@syukron_tours</strong></li>
                            <li class="flex items-start"><i class="fab fa-tiktok text-black mt-1 mr-2"></i>Wajib follow TikTok: <strong>@syukrontours</strong></li>
                            <li class="flex items-start"><i class="fas fa-link text-blue-500 mt-1 mr-2"></i>Daftar di: <a href="https://bit.ly/lombavidio-syukrontour" class="text-blue-600 hover:underline font-medium" target="_blank">bit.ly/lombavidio-syukrontour</a></li>
                            <li class="flex items-start"><i class="fas fa-cloud-upload-alt text-purple-500 mt-1 mr-2"></i>Upload video di: <a href="https://docs.google.com/forms/d/e/1FAIpQLSfGtDmlAbafWWLtxkJ9GOD3aVqu1zKLLBUXmug_HwTTmnF-Yg/viewform?usp=dialog" class="text-purple-600 hover:underline font-medium" target="_blank">Form Upload Video</a></li>
                            <li class="flex items-start"><i class="fas fa-user-friends text-green-500 mt-1 mr-2"></i>Boleh individu atau tim</li>
                            <li class="flex items-start"><i class="fas fa-video text-red-500 mt-1 mr-2"></i>Maksimal 1 video per peserta</li>
                        </ul>
                    </div>
                </div>
                <div class="section-item">
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover border-l-4 border-green-500">
                        <div class="flex items-center mb-4">
                            <div class="section-number">2</div>
                            <h3 class="text-xl font-bold text-gray-800">Tema Lomba</h3>
                        </div>
                        <div class="text-center p-4 bg-gradient-to-r from-green-50 to-blue-50 rounded-lg mb-3">
                            <h4 class="text-lg font-bold text-green-700 mb-2">"Pengertian Haji dan Umroh"</h4>
                            <p class="text-gray-600 text-sm">Video harus sesuai dengan tema yang telah ditentukan</p>
                        </div>
                        <div class="bg-red-50 border border-red-200 rounded-lg p-3 warning-pulse">
                            <div class="flex items-center text-sm"><i class="fas fa-exclamation-triangle text-red-500 mr-2"></i><span class="text-red-700 font-semibold">Video yang tidak sesuai tema otomatis gugur!</span></div>
                        </div>
                    </div>
                </div>
                <div class="section-item">
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover border-l-4 border-purple-500">
                        <div class="flex items-center mb-4">
                            <div class="section-number">3</div>
                            <h3 class="text-xl font-bold text-gray-800">Ketentuan Video</h3>
                        </div>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start"><i class="fas fa-clock text-purple-500 mt-1 mr-2"></i>Durasi: 15 detik - 3 menit (format TikTok)</li>
                            <li class="flex items-start"><i class="fas fa-upload text-blue-500 mt-1 mr-2"></i>Upload di akun TikTok pribadi</li>
                            <li class="flex items-start"><i class="fas fa-hashtag text-green-500 mt-1 mr-2"></i>Gunakan hashtag: <strong>#Syukrontours #hajibersamasyukrontour</strong></li>
                            <li class="flex items-start"><i class="fas fa-eye text-orange-500 mt-1 mr-2"></i>Akun TikTok tidak boleh private</li>
                            <li class="flex items-start"><i class="fas fa-shield-alt text-red-500 mt-1 mr-2"></i>Konten orisinal, tidak melanggar hak cipta & SARA</li>
                        </ul>
                    </div>
                </div>
                <div class="section-item">
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover border-l-4 border-yellow-500">
                        <div class="flex items-center mb-4">
                            <div class="section-number">4</div>
                            <h3 class="text-xl font-bold text-gray-800">Pengumpulan Video</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-gradient-to-r from-purple-50 to-blue-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="text-base font-bold text-purple-800 mb-2 flex items-center"><i class="fas fa-cloud-upload-alt mr-2"></i>Cara Upload Video</h4>
                                <ul class="space-y-2 text-purple-700 text-sm">
                                    <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-xs"></i>Upload video ke TikTok pribadi dengan hashtag</li>
                                    <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-xs"></i>Salin link video TikTok</li>
                                    <li class="flex items-start"><i class="fas fa-check-circle text-green-500 mt-1 mr-2 text-xs"></i>Submit melalui form Google</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfGtDmlAbafWWLtxkJ9GOD3aVqu1zKLLBUXmug_HwTTmnF-Yg/viewform?usp=dialog" target="_blank" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white text-sm font-semibold rounded-full transition-all hover:scale-105 shadow-md"><i class="fas fa-upload mr-2"></i>Upload Video Sekarang</a>
                            </div>
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 text-sm"><div class="flex items-center"><i class="fas fa-exclamation-triangle text-yellow-500 mr-2"></i><span class="text-yellow-700 font-semibold">Pastikan akun TikTok tidak di-private hingga lomba selesai!</span></div></div>
                        </div>
                    </div>
                </div>
                <div class="section-item">
    <div class="bg-white rounded-xl shadow-md p-6 card-hover border-l-4 border-indigo-500">
        <div class="flex items-center mb-4">
            <div class="section-number">5</div>
            <h3 class="text-xl font-bold text-gray-800">Timeline Lomba</h3>
        </div>
        <div class="space-y-3 text-sm">
            <div class="timeline-item flex items-center border-l-2 border-blue-200 pl-4">
                <div class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-semibold mr-3">Tahap 1</div>
                <div><i class="fas fa-user-plus text-blue-500 mr-2"></i><span>Pendaftaran Peserta</span> - <span class="text-gray-500">15–22 Agustus 2025</span></div>
            </div>
            <div class="timeline-item flex items-center border-l-2 border-green-200 pl-4">
                <div class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold mr-3">Tahap 2</div>
                <div><i class="fas fa-handshake text-green-500 mr-2"></i><span>Technical Meeting</span> - <span class="text-gray-500">23 Agustus 2025</span></div>
            </div>
            <div class="timeline-item flex items-center border-l-2 border-purple-200 pl-4">
                <div class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-xs font-semibold mr-3">Tahap 3</div>
                <div><i class="fas fa-video text-purple-500 mr-2"></i><span>Upload & Pengiriman Video</span> - <span class="text-gray-500">24- Agustus - 4 September 2025</span></div>
            </div>
            <div class="timeline-item flex items-center border-l-2 border-orange-200 pl-4">
                <div class="bg-orange-100 text-orange-800 px-2 py-1 rounded-full text-xs font-semibold mr-3">Tahap 4</div>
                <div><i class="fas fa-search text-orange-500 mr-2"></i><span>Seleksi Video</span> - <span class="text-gray-500">5–6 September 2025</span></div>
            </div>
            <div class="timeline-item flex items-center border-l-2 border-yellow-200 pl-4">
                <div class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-semibold mr-3">Tahap 5</div>
                <div><i class="fas fa-trophy text-yellow-500 mr-2"></i><span>Pengumuman Pemenang</span> - <span class="text-gray-500">7 September 2025</span></div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>
<section class="py-12 bg-gray-50" id="penilaian-hadiah">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-10 section-item">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">🏆 Kriteria Penilaian</h2>
                <p class="text-sm text-gray-600">Penilaian lomba akan lebih banyak mempertimbangkan jumlah views</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-md p-5 card-hover text-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-eye text-xl text-white"></i></div>
                    <h4 class="text-base font-bold text-gray-800 mb-2">Jumlah Views (Bobot Terbesar)</h4>
                    <p class="text-gray-600 text-sm">Semakin banyak views, semakin besar peluang menang</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 card-hover text-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-heart text-xl text-white"></i></div>
                    <h4 class="text-base font-bold text-gray-800 mb-2">Engagement</h4>
                    <p class="text-gray-600 text-sm">Like, komentar, dan share (nilai tambahan)</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 card-hover text-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-bullseye text-xl text-white"></i></div>
                    <h4 class="text-base font-bold text-gray-800 mb-2">Kesesuaian Tema</h4>
                    <p class="text-gray-600 text-sm">Konten sesuai tema "Pengertian Haji dan Umroh"</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 card-hover text-center">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-lightbulb text-xl text-white"></i></div>
                    <h4 class="text-base font-bold text-gray-800 mb-2">Kreativitas & Editing</h4>
                    <p class="text-gray-600 text-sm">Ide kreatif dan kualitas editing yang baik</p>
                </div>
            </div>
        </div>

        <!-- Bagian Hadiah tetap sama -->
        <div class="section-item">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 bg-gradient-to-r from-yellow-600 to-orange-600 bg-clip-text text-transparent">💰 Hadiah Menarik</h2>
                <p class="text-sm text-gray-600">Total hadiah lebih dari Rp 3.000.000</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="prize-card bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-lg p-6 text-center text-white shadow-lg">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto"><i class="fas fa-trophy text-3xl text-white"></i></div>
                        <div class="absolute -top-1 -right-1 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center"><span class="text-xs font-bold">1</span></div>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Juara 1</h3>
                    <div class="text-2xl font-bold mb-2">Rp 1.000.000</div>
                    <div class="text-yellow-100 text-sm">+ Sertifikat</div>
                </div>
                <div class="prize-card bg-gradient-to-br from-gray-400 to-gray-600 rounded-lg p-6 text-center text-white shadow-lg">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto"><i class="fas fa-medal text-3xl text-white"></i></div>
                        <div class="absolute -top-1 -right-1 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center"><span class="text-xs font-bold">2</span></div>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Juara 2</h3>
                    <div class="text-2xl font-bold mb-2">Rp 700.000</div>
                    <div class="text-gray-100 text-sm">+ Sertifikat</div>
                </div>
                <div class="prize-card bg-gradient-to-br from-orange-400 to-orange-600 rounded-lg p-6 text-center text-white shadow-lg">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto"><i class="fas fa-award text-3xl text-white"></i></div>
                        <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center"><span class="text-xs font-bold">3</span></div>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Juara 3</h3>
                    <div class="text-2xl font-bold mb-2">Rp 500.000</div>
                    <div class="text-orange-100 text-sm">+ Sertifikat</div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-12 bg-white" id="ketentuan-tambahan">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-10 section-item">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">📝 Ketentuan Tambahan</h2>
            </div>
            <div class="grid grid-cols-1 gap-6">
                <div class="section-item">
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                        <div class="flex items-center mb-3"><i class="fas fa-copyright text-blue-600 text-xl mr-2"></i><h3 class="text-lg font-bold text-blue-800">Hak Cipta & Penggunaan Karya</h3></div>
                        <ul class="space-y-2 text-blue-700 text-sm">
                            <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-2 text-xs"></i>Hak cipta tetap milik peserta</li>
                            <li class="flex items-start"><i class="fas fa-share text-blue-500 mt-1 mr-2 text-xs"></i>Panitia berhak mempublikasikan ulang untuk promosi lomba</li>
                        </ul>
                    </div>
                </div>
                <div class="section-item">
                    <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                        <div class="flex items-center mb-3"><i class="fas fa-gavel text-red-600 text-xl mr-2"></i><h3 class="text-lg font-bold text-red-800">Keputusan Juri</h3></div>
                        <div class="flex items-center text-red-700 text-sm"><i class="fas fa-exclamation-circle mr-2"></i><span class="font-semibold">Keputusan juri final dan tidak dapat diganggu gugat</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-br from-blue-50 to-indigo-100" id="kontak">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-10 section-item">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">📞 Kontak Panitia</h2>
                <p class="text-sm text-gray-600">Hubungi kami jika ada pertanyaan seputar lomba</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 section-item">
                <div class="bg-white rounded-lg shadow-md p-5 text-center card-hover">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mx-auto mb-3"><i class="fab fa-tiktok text-xl text-white"></i></div>
                    <h4 class="font-bold text-gray-800 text-sm mb-2">TikTok</h4>
                    <a href="https://tiktok.com/@syukrontours" target="_blank" class="text-blue-600 hover:underline text-sm font-medium">@syukrontours</a>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center card-hover">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3"><i class="fab fa-whatsapp text-xl text-white"></i></div>
                    <h4 class="font-bold text-gray-800 text-sm mb-2">WhatsApp</h4>
                    <a href="https://wa.me/6281372324461" target="_blank" class="text-green-600 hover:underline text-sm font-medium">0818-0270-9111</a>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center card-hover">
                    <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-envelope text-xl text-white"></i></div>
                    <h4 class="font-bold text-gray-800 text-sm mb-2">Email</h4>
                    <a href="mailto:lombavideosyukron@gmail.com" class="text-red-600 hover:underline text-sm font-medium">lombavideosyukron@gmail.com</a>
                </div>
            </div>
            <div class="mt-10 section-item">
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-5 rounded-r-lg">
                    <div class="flex items-start"><i class="fas fa-info-circle text-yellow-500 text-lg mr-2 mt-1"></i><div><h4 class="font-bold text-yellow-800 text-sm mb-2">Persetujuan Syarat & Ketentuan</h4><p class="text-yellow-700 text-sm">Dengan mengikuti lomba ini, peserta dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku.</p></div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 gradient-bg cta-section">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="section-item">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Siap Ikut Sayembara?</h2>
                <p class="text-sm text-blue-100 mb-6 max-w-xl mx-auto">Mulai buat video kreatifmu sekarang dan menangkan hadiah jutaan rupiah!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/62818569111" target="_blank" class="inline-flex items-center justify-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white text-sm font-semibold rounded-full transition-all hover:scale-105">Tanya Detail Sayembara</a>
                    <a href="/" class="inline-flex items-center justify-center px-6 py-3 bg-white hover:bg-gray-100 text-blue-600 text-sm font-semibold rounded-full transition-all hover:scale-105">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-32 h-16 object-contain mb-4" />
                    <p class="text-gray-400 text-sm mb-4">Melayani perjalanan haji dan umroh dengan penuh amanah dan berkah sejak 2012.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 transition-colors"><i class="fab fa-facebook-f text-sm"></i></a>
                        <a href="https://wa.me/62818569111" class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 transition-colors"><i class="fab fa-whatsapp text-sm"></i></a>
                        <a href="#" class="w-8 h-8 bg-gray-700 rounded-lg flex items-center justify-center text-gray-300 hover:bg-yellow-600 transition-colors"><i class="fab fa-instagram text-sm"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-base font-semibold mb-3">Layanan</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Haji Express</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Umroh Reguler</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Umroh VIP</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Konsultasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base font-semibold mb-3">Informasi</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="/tentang-kami" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="/syarat-ketentuan" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="/kebijakan-privasi" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="/faq" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base font-semibold mb-3">Kontak</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex items-center"><i class="fas fa-phone mr-2"></i>+6281-8569-111</li>
                        <li class="flex items-center"><i class="fas fa-envelope mr-2"></i>info@syukrontour.com</li>
                        <li class="flex items-center"><i class="fas fa-map-marker-alt mr-2"></i>Pekanbaru, Riau</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-6 pt-6 text-center text-gray-400 text-sm">
                <p>&copy; 2012 - {{ date('Y') }} Syukron Tours ❤️ Semoga Allah SWT meridhai perjalanan haji Anda.</p>
            </div>
        </div>
    </footer>
    <div class="fixed bottom-4 right-4 z-50">
        <a href="https://wa.me/62818569111" target="_blank" class="w-12 h-12 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center text-white shadow-lg transition-all floating-animation"><i class="fab fa-whatsapp text-xl"></i></a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    mobileMenu.classList.toggle('active');
                });
            }
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) entry.target.classList.add('visible');
                });
            }, { threshold: 0.1 });
            document.querySelectorAll('.section-item').forEach((item) => observer.observe(item));
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white', 'shadow-md');
                    navbar.classList.remove('glass-morphism');
                } else {
                    navbar.classList.add('glass-morphism');
                    navbar.classList.remove('bg-white', 'shadow-md');
                }
            });
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', (e) => {
                    e.preventDefault();
                    document.querySelector(anchor.getAttribute('href'))?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                });
            });
        });
    </script>
</body>
</html>
