<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary Meta Tags -->
    <title>Kamar Hotel - Syukron Tours</title>
    <meta name="title" content="Hotel | Syukron Tours">
    <meta name="description"
        content="Ketahui lebih lanjut tentang Syukron Tours, travel umroh terpercaya sejak 2008. Kami menawarkan pelayanan amanah dengan izin resmi Kemenag RI.">
    <meta name="keywords"
        content="tentang kami, travel umroh, umroh terpercaya, Syukron Tours, izin resmi umroh, pelayanan umroh, sejarah travel umroh">
    <meta name="author" content="Syukron Tours">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://syukrontours.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Syukron Tours">
    <meta property="og:title" content="Tentang Kami | Syukron Tours">
    <meta property="og:description"
        content="Pelajari sejarah, visi, misi, dan komitmen Syukron Tours dalam melayani jamaah umroh dengan penuh amanah sejak 2008.">
    <meta property="og:image" content="https://syukrontours.com/images/tentang-kami-umroh.jpg">
    <meta property="og:image:alt" content="Masjidil Haram - Syukron Tours">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://syukrontours.com/tentang-kami">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tentang Kami | Syukron Tours">
    <meta name="twitter:description"
        content="Pelajari sejarah, visi, misi, dan komitmen Syukron Tours dalam melayani jamaah umroh dengan penuh amanah sejak 2008.">
    <meta name="twitter:image" content="https://syukrontours.com/images/tentang-kami-umroh.jpg">
    <meta name="twitter:image:alt" content="Masjidil Haram - Syukron Tours">
    <meta name="twitter:site" content="@SyukronTours">
    <meta name="twitter:creator" content="@SyukronTours">

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
        "name": "Syukron Tours",
        "url": "https://mudarismandiriwisata.id",
        "logo": "https://syukrontours.com/assets/images/logo.png",
        "description": "Syukron Tours adalah travel umroh terpercaya sejak 2008, berizin resmi dari Kementerian Agama RI, melayani jamaah dengan penuh amanah.",
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
            "email": "SyukronTours@gmail.com",
            "availableLanguage": ["Indonesian"]
        },
        "sameAs": [
            "https://www.facebook.com/SyukronTours",
            "https://www.instagram.com/SyukronTours",
            "https://wa.me/6285211451111"
        ]
    }
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        /* Warna utama biru (gradient identik biru) */
        .gradient-bg {
            background: linear-gradient(135deg, #0052CC 0%, #0ea5e9 50%, #6366f1 100%);
        }

        .gradient-bg:hover {
            background: linear-gradient(135deg, #003d99 0%, #0284c7 50%, #4f46e5 100%);
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
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
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
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .search-box:hover {
            transform: translateY(-2px);
        }

        .search-box input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        .search-box input::placeholder {
            transition: color 0.3s ease;
        }

        .search-box:hover input::placeholder {
            color: #93c5fd;
        }

        #searchButton {
            padding: 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        #searchButton:hover {
            background-color: rgba(0, 0, 0, 0.05);
            transform: rotate(90deg);
        }

        .carousel {
            position: relative;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            flex: 0 0 100%;
        }

        .carousel-prev,
        .carousel-next {
            transition: all 0.3s ease;
        }

        .carousel-prev:hover,
        .carousel-next:hover {
            transform: scale(1.1);
        }

        /* Sticky Filter Bar */
        .sticky {
            transition: all 0.3s ease;
        }

        /* Feature Badges */
        .bg-blue-100 {
            background-color: #dbeafe;
        }

        /* Modal transitions */
        #modalContent {
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Carousel styles */
        .carousel-item {
            flex: 0 0 100%;
            transition: opacity 0.5s ease;
        }

        /* Room card hover effect */
        .room-item:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Success Notification */
        #successNotification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #10b981;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
            align-items: center;
            animation: slideIn 0.3s ease-out, fadeOut 0.3s ease-in 2.7s forwards;
        }

        #successNotification.show {
            display: flex;
        }

        #successNotification .icon {
            margin-right: 10px;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 640px) {
            .search-box {
                max-width: 100%;
            }

            .search-box input {
                font-size: 14px;
            }

            #successNotification {
                top: 10px;
                right: 10px;
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 overflow-x-hidden">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <a href="/"
                        class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        Beranda
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/hotel"
                        class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        Hotel
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/kebijakan-privasi"
                        class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        Kebijakan dan Privasi
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/faq"
                        class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        FAQ
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/tentang-kami"
                        class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        Tentang Kami
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/syarat-ketentuan"
                        class="nav-link relative text-gray-700 hover:text-yellow-600 transition-colors duration-300 group">
                        Syarat dan Ketentuan
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-yellow-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                <!-- CTA Desktop -->
                <div class="hidden md:flex">
                    <button
                        class="gradient-bg text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
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
                <a href="/"
                    class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg transition-colors">Beranda</a>
                <a href="/hotel"
                    class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg transition-colors">Hotel</a>
                <a href="/faq"
                    class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg transition-colors">FAQ</a>
                <a href="/tentang-kami"
                    class="block py-3 px-4 text-yellow-600 font-semibold bg-yellow-50 rounded-lg">Hotel</a>
                <a href="/kebijakan-privasi"
                    class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">Kebijakan dan Privasi</a>
                <a href="/syarat-ketentuan" class="block py-3 px-4 text-gray-700 hover:bg-yellow-50 rounded-lg">Syarat
                    dan Ketentuan</a>
                <button
                    class="w-full gradient-bg text-white px-6 py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                    Konsultasi Gratis
                </button>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 hero-gradient relative overflow-hidden">
        <div class="absolute inset-0 bg-white/10"></div>
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center fade-in">
                <div class="inline-flex items-center justify-center w-20 h-20 gradient-bg rounded-full mb-6">
                    <i class="fas fa-hotel text-2xl text-white"></i>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">
                    Lihat ditail Hotel
                </h1>
                <p class="text-xl md:text-2xl text-blue-700 mb-8 max-w-3xl mx-auto">
                    Nikmati kenyamanan dan kemewahan di hotel-hotel terbaik kami, dirancang untuk memenuhi kebutuhan jamaah umroh.
                </p>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
<section class="py-24 bg-gray-50 relative overflow-hidden" id="hotels">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 bg-[url('https://syukrontour.com/images/pattern-bg.png')] bg-cover bg-center opacity-10"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-white/30"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Hotel Details (Loop Kamar) -->
        @foreach ($hotel->kamarHotels as $kamarHotel)
            <div class="card-hover bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transform transition-all duration-500 hover:-translate-y-2 hotel-item" data-nama="{{ strtolower($hotel->nama_hotel) }}" data-bintang="{{ $hotel->bintang }}">
                <div class="relative overflow-hidden rounded-xl mb-5">
                    <img src="{{ asset('storage/' . $hotel->logo) }}" alt="{{ $hotel->nama_hotel }}" class="w-full h-56 object-cover rounded-xl transition-transform duration-500 hover:scale-105" loading="lazy">
                    <div class="absolute top-3 left-3 bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold flex items-center">
                        <i class="fas fa-star mr-1"></i>{{ $hotel->bintang }} Bintang
                    </div>
                    <div class="absolute bottom-3 right-3 bg-blue-600/80 text-white px-3 py-1 rounded-full text-xs font-semibold">
                        Mulai Rp {{ number_format($kamarHotel->harga ?? 1000000, 0, ',', '.') }}
                    </div>
                </div>

                <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-3 line-clamp-1">{{ $hotel->nama_hotel }}</h3>
                <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">{{ $hotel->deskripsi }}</p>
                <div class="flex items-center text-gray-500 text-sm mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span class="line-clamp-1">{{ $hotel->alamat }}</span>
                </div>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full flex items-center">
                        <i class="fas fa-wifi mr-1"></i> Wi-Fi Gratis
                    </span>
                    <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full flex items-center">
                        <i class="fas fa-utensils mr-1"></i> Sarapan
                    </span>
                    @if ($hotel->bintang >= 4)
                        <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full flex items-center">
                            <i class="fas fa-swimming-pool mr-1"></i> Kolam Renang
                        </span>
                    @endif
                </div>

                <button onclick="openBookingModal({{ $kamarHotel->id }}, '{{ $hotel->nama_hotel }}')"
                    class="inline-flex items-center px-5 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full font-medium text-sm hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105">
                    Book Now
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        @endforeach

        <!-- Booking Modal -->
        <div id="bookingModal"
            class="fixed inset-0 bg-black/50 flex items-center justify-center p-4 hidden z-50 transition-opacity duration-300">
            <div class="bg-white rounded-xl max-w-md w-full mx-auto shadow-xl transform transition-all duration-300 scale-95 opacity-0"
                id="modalContent">
                <button onclick="closeBookingModal()"
                    class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="p-6 md:p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-2 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h2 id="modalTitle" class="text-xl font-bold text-gray-900">Book Your Stay</h2>
                    </div>

                    <div id="errorMessage" class="hidden text-red-600 text-sm mb-4"></div>

                    <form id="bookingForm" method="POST" action="{{ route('bookings.store') }}">
                        @csrf
                        <input type="hidden" name="kamar_hotel_id" id="hotel_id"> <!-- Perbaikan di sini -->

                        <div class="space-y-4">
                            <div>
                                <label for="guest_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                <input type="text" name="guest_name" id="guest_name"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                    required>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="guest_email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                    <input type="email" name="guest_email" id="guest_email"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                        required>
                                </div>
                                <div>
                                    <label for="guest_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                                    <input type="text" name="guest_phone" id="guest_phone"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                        required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="check_in_date" class="block text-sm font-medium text-gray-700 mb-1">Check-in *</label>
                                    <input type="date" name="check_in_date" id="check_in_date"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                        required>
                                </div>
                                <div>
                                    <label for="check_out_date" class="block text-sm font-medium text-gray-700 mb-1">Check-out *</label>
                                    <input type="date" name="check_out_date" id="check_out_date"
                                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                        required>
                                </div>
                            </div>

                            <div>
                                <label for="room_quantity" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Kamar *</label>
                                <input type="number" name="room_quantity" id="room_quantity"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                    min="1" value="1" required>
                            </div>
                        </div>

                        <div class="mt-8">
                            <button type="submit" id="submitButton"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 shadow-sm hover:shadow-md flex items-center justify-center">
                                Complete Booking
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Success Notification -->
            <div id="successNotification" class="hidden fixed top-20 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center z-50 transition-all duration-300">
                <span class="icon"><i class="fas fa-check-circle mr-2"></i></span>
                <span>Pemesanan berhasil! Anda akan diarahkan dalam 3 detik...</span>
            </div>
        </div>
    </div>
</section>

<script>
    // Enhanced Modal Functions
    function openBookingModal(kamarHotelId, hotelName) {
        const modal = document.getElementById('bookingModal');
        const modalContent = document.getElementById('modalContent');
        const errorMessage = document.getElementById('errorMessage');

        document.getElementById('hotel_id').value = kamarHotelId;
        document.getElementById('modalTitle').textContent = `Book Hotel: ${hotelName}`;
        errorMessage.classList.add('hidden');

        // Set min dates based on current date (11:08 PM WIB, 30 June 2025)
        const today = new Date('2025-06-30T23:08:00+07:00').toISOString().split('T')[0];
        document.getElementById('check_in_date').min = today;
        document.getElementById('check_out_date').min = today;

        // Reset room quantity to 1
        document.getElementById('room_quantity').value = 1;

        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('opacity-0', 'scale-95');
            modalContent.classList.add('opacity-100', 'scale-100');
        }, 10);
    }

    function closeBookingModal() {
        const modal = document.getElementById('bookingModal');
        const modalContent = document.getElementById('modalContent');

        modalContent.classList.remove('opacity-100', 'scale-100');
        modalContent.classList.add('opacity-0', 'scale-95');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    // Form Submission with AJAX and Success Notification
    document.getElementById('bookingForm').addEventListener('submit', async function(e) {
        e.preventDefault();
        const submitButton = document.getElementById('submitButton');
        const errorMessage = document.getElementById('errorMessage');
        const successNotification = document.getElementById('successNotification');
        const roomQuantity = parseInt(document.getElementById('room_quantity').value) || 1;

        submitButton.disabled = true;
        submitButton.innerHTML = 'Processing... <i class="fas fa-spinner fa-spin ml-2"></i>';

        const checkIn = new Date(document.getElementById('check_in_date').value);
        const checkOut = new Date(document.getElementById('check_out_date').value);
        const today = new Date('2025-06-30T23:08:00+07:00');

        if (checkIn < today.setHours(0, 0, 0, 0) || checkOut <= checkIn || roomQuantity < 1) {
            errorMessage.textContent = 'Check-in harus hari ini atau setelahnya, check-out harus setelah check-in, dan jumlah kamar minimal 1.';
            errorMessage.classList.remove('hidden');
            submitButton.disabled = false;
            submitButton.innerHTML = 'Complete Booking <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path></svg>';
            return;
        }

        const formData = new FormData(this);
        formData.append('room_quantity', roomQuantity);

        try {
            const response = await fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            });

            const result = await response.json();
            console.log('Server Response:', result);

            if (response.ok && result.success) {
                successNotification.classList.remove('hidden');
                successNotification.classList.add('show');
                setTimeout(() => {
                    successNotification.classList.remove('show');
                    closeBookingModal();
                    window.location.href = '{{ route('hotel.show', $hotel->slug) }}';
                }, 3000);
            } else {
                errorMessage.textContent = result.message || 'Terjadi kesalahan saat memproses pemesanan.';
                errorMessage.classList.remove('hidden');
            }
        } catch (error) {
            console.error('Network Error:', error);
            errorMessage.textContent = 'Terjadi kesalahan jaringan. Silakan coba lagi.';
            errorMessage.classList.remove('hidden');
        } finally {
            submitButton.disabled = false;
            submitButton.innerHTML = 'Complete Booking <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path></svg>';
        }
    });

    // Update check-out min date when check-in changes
    document.getElementById('check_in_date').addEventListener('change', function() {
        document.getElementById('check_out_date').min = this.value;
    });

    // Close modal when clicking outside
    document.getElementById('bookingModal').addEventListener('click', (e) => {
        if (e.target === document.getElementById('bookingModal')) {
            closeBookingModal();
        }
    });

    // Fade-in effect for initial load
    document.addEventListener('DOMContentLoaded', () => {
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach((el, index) => {
            setTimeout(() => {
                el.classList.add('visible');
            }, index * 200);
        });
    });
</script>

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
                    <a href="https://wa.me/62818569111" target="_blank"
                        class="inline-flex items-center justify-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-2 text-xl"></i>
                        Chat WhatsApp
                    </a>
                    <a href="tel:+62818569111"
                        class="inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-gray-100 text-blue-600 font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-phone mr-2"></i>
                        Telepon Sekarang
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
                            syukrontour@gmail.com
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Pekanbaru, Riau
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2012 - Syukron Tours ❤️ for jamaah Indonesia.</p>
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
