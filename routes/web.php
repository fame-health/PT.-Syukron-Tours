<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\TestimonialController;
use App\Models\PageVisitor;
use Artesaos\SEOTools\Facades\SEOTools;

Route::get('/', [TestimonialController::class, 'homepage'])->name('home');

// FAQ
Route::get('/faq', function () {
    PageVisitor::incrementVisit('FAQ Page');

    SEOTools::setTitle('FAQ - Syukron Tour', false);
    SEOTools::setDescription('Temukan jawaban atas pertanyaan umum tentang paket umroh kami di Syukron Tour. Informasi lengkap untuk perjalanan ibadah Anda.');
    SEOTools::opengraph()->setUrl('https://syukrontour.com/faq');
    SEOTools::opengraph()->setTitle('FAQ - Syukron Tour');
    SEOTools::opengraph()->setDescription('Temukan jawaban atas pertanyaan umum tentang paket umroh kami di Syukron Tour.');
    SEOTools::twitter()->setTitle('FAQ - Syukron Tour');
    SEOTools::twitter()->setDescription('Temukan jawaban atas pertanyaan umum tentang paket umroh kami.');
    SEOTools::jsonLd()->setTitle('FAQ - Syukron Tour');
    SEOTools::jsonLd()->setDescription('Temukan jawaban atas pertanyaan umum tentang paket umroh kami di Syukron Tour.');
    SEOTools::jsonLd()->setType('WebPage');

    return view('faq.index');
})->name('faq');

// Kebijakan Privasi
Route::get('/kebijakan-privasi', function () {
    PageVisitor::incrementVisit('Kebijakan Privasi');

    SEOTools::setTitle('Kebijakan Privasi - Syukron Tour', false);
    SEOTools::setDescription('Baca kebijakan privasi Syukron Tour untuk memahami bagaimana kami melindungi data pribadi Anda selama proses pendaftaran umroh.');
    SEOTools::opengraph()->setUrl('https://syukrontour.com/kebijakan-privasi');
    SEOTools::opengraph()->setTitle('Kebijakan Privasi - Syukron Tour');
    SEOTools::opengraph()->setDescription('Baca kebijakan privasi Syukron Tour untuk perlindungan data Anda.');
    SEOTools::twitter()->setTitle('Kebijakan Privasi - Syukron Tour');
    SEOTools::twitter()->setDescription('Baca kebijakan privasi Syukron Tour.');
    SEOTools::jsonLd()->setTitle('Kebijakan Privasi - Syukron Tour');
    SEOTools::jsonLd()->setDescription('Baca kebijakan privasi Syukron Tour untuk perlindungan data Anda.');
    SEOTools::jsonLd()->setType('WebPage');

    return view('kebijakan_privasi.index');
})->name('privacy');

// Syarat & Ketentuan
Route::get('/syarat-ketentuan', function () {
    PageVisitor::incrementVisit('Syarat & Ketentuan');

    SEOTools::setTitle('Syarat & Ketentuan - Syukron Tour', false);
    SEOTools::setDescription('Pelajari syarat dan ketentuan layanan umroh dari Syukron Tour untuk memastikan perjalanan ibadah Anda berjalan lancar.');
    SEOTools::opengraph()->setUrl('https://syukrontour.com/syarat-ketentuan');
    SEOTools::opengraph()->setTitle('Syarat & Ketentuan - Syukron Tour');
    SEOTools::opengraph()->setDescription('Pelajari syarat dan ketentuan layanan umroh dari Syukron Tour.');
    SEOTools::twitter()->setTitle('Syarat & Ketentuan - Syukron Tour');
    SEOTools::twitter()->setDescription('Pelajari syarat dan ketentuan layanan umroh kami.');
    SEOTools::jsonLd()->setTitle('Syarat & Ketentuan - Syukron Tour');
    SEOTools::jsonLd()->setDescription('Pelajari syarat dan ketentuan layanan umroh dari Syukron Tour.');
    SEOTools::jsonLd()->setType('WebPage');

    return view('syarat_ketentuan.index');
})->name('terms');


use App\Http\Controllers\BookingController;

Route::prefix('bookings')->name('bookings.')->group(function () {
    Route::get('/create/{kamar_id}', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/{booking}', [BookingController::class, 'show'])->name('show');
});

use App\Http\Controllers\BookingInvoiceController;

Route::get('/booking/{id}/invoice', [BookingInvoiceController::class, 'generate'])->name('booking.invoice.download');


use App\Http\Controllers\HotelController;

Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotel/{slug}', [HotelController::class, 'show'])->name('hotel.show');

// Tentang Kami
Route::get('/tentang-kami', function () {
    PageVisitor::incrementVisit('Tentang Kami');

    SEOTools::setTitle('Tentang Kami - Syukron Tour', false);
    SEOTools::setDescription('Ketahui lebih lanjut tentang Syukron Tour, agen umroh terpercaya dengan pengalaman lebih dari 15 tahun melayani jamaah.');
    SEOTools::opengraph()->setUrl('https://syukrontour.com/tentang-kami');
    SEOTools::opengraph()->setTitle('Tentang Kami - Syukron Tour');
    SEOTools::opengraph()->setDescription('Ketahui lebih lanjut tentang Syukron Tour, agen umroh terpercaya.');
    SEOTools::twitter()->setTitle('Tentang Kami - Syukron Tour');
    SEOTools::twitter()->setDescription('Ketahui lebih lanjut tentang Syukron Tour.');
    SEOTools::jsonLd()->setTitle('Tentang Kami - Syukron Tour');
    SEOTools::jsonLd()->setDescription('Ketahui lebih lanjut tentang Syukron Tour, agen umroh terpercaya.');
    SEOTools::jsonLd()->setType('WebPage');

    return view('tentang_kami.index');
})->name('about');

// Contact Form Routes (public)
Route::get('/contact', [ContactFormController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
Route::get('/contact/thank-you', [ContactFormController::class, 'thankYou'])->name('contact.thank-you');

// API untuk testimoni (untuk AJAX jika diperlukan)
Route::get('/api/testimoni', [TestimonialController::class, 'api'])->name('testimoni.api');
Route::get('/testimonials/debug', [TestimonialController::class, 'debug']);


// Buku
Route::get('/buku', function () {
    PageVisitor::incrementVisit('Buku');

    SEOTools::setTitle('Daftar Buku - SyukronTour', false);
    SEOTools::setDescription('Lihat daftar buku dan referensi terkait layanan SyukronTour.');
    SEOTools::opengraph()->setUrl('https://mudarismandiriwisata.com/buku');
    SEOTools::opengraph()->setTitle('Daftar Buku - SyukronTour');
    SEOTools::opengraph()->setDescription('Lihat daftar buku dan referensi terkait layanan SyukronTour.');
    SEOTools::twitter()->setTitle('Daftar Buku - SyukronTour');
    SEOTools::twitter()->setDescription('Lihat daftar buku dan referensi kami.');
    SEOTools::jsonLd()->setTitle('Daftar Buku - SyukronTour');
    SEOTools::jsonLd()->setDescription('Lihat daftar buku dan referensi terkait layanan SyukronTour.');
    SEOTools::jsonLd()->setType('WebPage');

    return view('buku.index');
    
})->name('buku.index');
