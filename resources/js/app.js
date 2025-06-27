import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {

    // ============ MOBILE MENU FUNCTIONALITY ============
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = menuBtn.querySelector('i');

    // Toggle mobile menu
    if (menuBtn) {
        menuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('active');

            // Toggle icon
            if (mobileMenu.classList.contains('active')) {
                mobileMenuIcon.className = 'fas fa-times text-2xl mobile-menu-icon active';
            } else {
                mobileMenuIcon.className = 'fas fa-bars text-2xl mobile-menu-icon';
            }
        });
    }

    // Close mobile menu when clicking on menu links
    const mobileMenuLinks = mobileMenu?.querySelectorAll('a');
    mobileMenuLinks?.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('active');
            mobileMenuIcon.className = 'fas fa-bars text-2xl mobile-menu-icon';
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileMenu && !menuBtn?.contains(e.target) && !mobileMenu.contains(e.target)) {
            if (mobileMenu.classList.contains('active')) {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('active');
                mobileMenuIcon.className = 'fas fa-bars text-2xl mobile-menu-icon';
            }
        }
    });

    // ============ NAVBAR SCROLL EFFECT ============
    const navbar = document.getElementById('navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', throttle(function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Change navbar background on scroll
        if (navbar) {
            if (scrollTop > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(20px)';
                navbar.style.boxShadow = '0 8px 32px 0 rgba(31, 38, 135, 0.37)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.25)';
                navbar.style.backdropFilter = 'blur(10px)';
                navbar.style.boxShadow = 'none';
            }

            // Hide/show navbar on scroll
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
        }

        lastScrollTop = scrollTop;
    }, 100));

    // ============ SMOOTH SCROLLING FOR NAVIGATION LINKS ============
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                const navbarHeight = navbar?.offsetHeight || 0;
                const targetPosition = targetSection.offsetTop - navbarHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============ SCROLL REVEAL ANIMATION ============
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));

    // ============ ANIMATED COUNTER FOR STATS ============
    const animateCounter = (element, target, duration = 2000) => {
        let start = 0;
        const increment = target / (duration / 16);

        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target + (element.textContent.includes('+') ? '+' : '') +
                    (element.textContent.includes('%') ? '%' : '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start) + (element.textContent.includes('+') ? '+' : '') +
                    (element.textContent.includes('%') ? '%' : '');
            }
        }, 16);
    };

    // Animate stats when they come into view
    const statsSection = document.querySelector('.gradient-bg');
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumbers = entry.target.querySelectorAll('.text-4xl');

                statNumbers.forEach(stat => {
                    const text = stat.textContent;
                    const number = parseInt(text.replace(/\D/g, ''));
                    if (number) {
                        stat.textContent = '0' + (text.includes('+') ? '+' : '') +
                            (text.includes('%') ? '%' : '');
                        animateCounter(stat, number);
                    }
                });

                statsObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // ============ PAKET UMROH BUTTON HANDLERS ============
    const paketBtns = Array.from(document.querySelectorAll('button')).filter(btn =>
        btn.textContent.includes('Pilih Paket')
    );

    paketBtns.forEach((btn, index) => {
        btn.addEventListener('click', function() {
            // Scroll to contact form
            setTimeout(() => {
                document.querySelector('#kontak')?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 1000);
        });
    });

    // ============ CONTACT FORM HANDLING ============
    const contactForm = document.querySelector('form');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const name = this.querySelector('input[placeholder*="nama"]')?.value;
            const email = this.querySelector('input[type="email"]')?.value;
            const phone = this.querySelector('input[type="tel"]')?.value;
            const paket = this.querySelector('select')?.value;
            const message = this.querySelector('textarea')?.value;

            // Basic validation
            if (!name || !email || !phone) {
                return;
            }

            if (!isValidEmail(email)) {
                return;
            }

            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn?.innerHTML;

            if (submitBtn) {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
                submitBtn.disabled = true;
            }

            setTimeout(() => {
                this.reset();
                if (submitBtn && originalText) {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            }, 2000);
        });
    }

    // ============ GALLERY IMAGE MODAL ============
    const galleryImages = document.querySelectorAll('#galeri img');

    galleryImages.forEach((img, index) => {
        img.addEventListener('click', function() {
            createImageModal(this.src, this.alt);
        });

        img.style.cursor = 'pointer';
    });

    // ============ FLOATING WHATSAPP BUTTON ============
    const whatsappBtn = document.querySelector('.floating-animation a[href*="wa.me"]');

    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', function(e) {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    }

    // ============ HERO BUTTONS FUNCTIONALITY ============
    const heroButtons = document.querySelectorAll('#home button');

    heroButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.textContent.includes('Paket')) {
                document.querySelector('#paket')?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            } else if (this.textContent.includes('Hubungi')) {
                document.querySelector('#kontak')?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ============ KONSULTASI GRATIS BUTTONS ============
    const konsultasiButtons = Array.from(document.querySelectorAll('button')).filter(btn =>
        btn.textContent.includes('Konsultasi Gratis')
    );

    konsultasiButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelector('#kontak')?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });

    // ============ FORM INPUT ENHANCEMENTS ============
    const formInputs = document.querySelectorAll('input, textarea, select');

    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement?.classList.add('focused');
        });

        input.addEventListener('blur', function() {
            this.parentElement?.classList.remove('focused');
        });

        if (input.value) {
            input.parentElement?.classList.add('has-value');
        }

        input.addEventListener('input', function() {
            if (this.value) {
                this.parentElement?.classList.add('has-value');
            } else {
                this.parentElement?.classList.remove('has-value');
            }
        });
    });

    // ============ ENHANCED UTILITY FUNCTIONS ============

    // Email validation
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Enhanced image modal
    function createImageModal(src, alt) {
        const existingModal = document.querySelector('.image-modal');
        if (existingModal) {
            existingModal.remove();
        }

        const modal = document.createElement('div');
        modal.className =
            'image-modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 opacity-0 transition-opacity duration-300';

        modal.innerHTML = `
        <div class="relative max-w-4xl max-h-full p-4">
            <img src="${src}" alt="${alt}" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl">
            <button onclick="this.closest('.image-modal').remove()"
                    class="absolute top-2 right-2 w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center text-white hover:bg-opacity-30 transition-all">
                <i class="fas fa-times"></i>
            </button>
            <div class="absolute bottom-4 left-4 right-4 text-center">
                <p class="text-white text-lg font-semibold bg-black bg-opacity-50 rounded-lg px-4 py-2 inline-block">
                    ${alt}
                </p>
            </div>
        </div>
    `;

        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.remove();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                modal.remove();
            }
        });

        document.body.appendChild(modal);
        setTimeout(() => {
            modal.style.opacity = '1';
        }, 10);
    }

    // Smooth scroll to top function
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Enhanced scroll to top button
    window.addEventListener('scroll', throttle(function() {
        let scrollTopBtn = document.querySelector('.scroll-top-btn');

        if (window.pageYOffset > 300) {
            if (!scrollTopBtn) {
                scrollTopBtn = document.createElement('button');
                scrollTopBtn.className =
                    'scroll-top-btn fixed bottom-24 right-6 w-12 h-12 bg-yellow-600 hover:bg-yellow-700 rounded-full flex items-center justify-center text-white shadow-lg z-40 transform scale-0 transition-all duration-300';
                scrollTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
                scrollTopBtn.title = 'Kembali ke atas';

                scrollTopBtn.onclick = scrollToTop;
                document.body.appendChild(scrollTopBtn);
            }
            setTimeout(() => {
                scrollTopBtn.style.transform = 'scale(1)';
            }, 100);
        } else if (scrollTopBtn) {
            scrollTopBtn.style.transform = 'scale(0)';
            setTimeout(() => {
                if (scrollTopBtn.parentElement) {
                    scrollTopBtn.remove();
                }
            }, 300);
        }
    }, 100));

    // ============ LOADING ANIMATION ============
    window.addEventListener('load', function() {
        const loader = document.querySelector('.loader');
        if (loader) {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.remove();
            }, 500);
        }

        const heroContent = document.querySelector('#home .fade-in');
        if (heroContent) {
            heroContent.classList.add('visible');
        }
    });

    // ============ PERFORMANCE OPTIMIZATION ============
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }
});
